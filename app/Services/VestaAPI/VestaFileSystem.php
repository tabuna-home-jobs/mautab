<?php namespace Mautab\Services\VestaAPI;

use Auth;


trait VestaFileSystem
{

    protected $delimeter = '|';
    protected $info_positions = [
        'TYPE' => 0,
        'PERMISSIONS' => 1,
        'DATE' => 2,
        'TIME' => 3,
        'OWNER' => 4,
        'GROUP' => 5,
        'SIZE' => 6,
        'NAME' => 7
    ];


    /**
     * @param $src
     * @param $dst
     * @return mixed
     */
    public function  moveFile($src, $dst)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-move-fs-file', Auth::User()->nickname, $src, $dst);
    }

    /**
     * @param $patch
     * @return mixed
     */
    public function  openFile($patch)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-open-fs-file', Auth::User()->nickname, $patch);
    }

    /**
     * @param $patch
     * @return mixed
     */
    public function  addDir($patch)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-add-fs-directory', Auth::User()->nickname, $patch);
    }

    /**
     * @param $patch
     * @return mixed
     */
    public function  addFile($patch)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-add-fs-file', Auth::User()->nickname, $patch);
    }

    /**
     * @param $src_file
     * @param $permissions
     * @return mixed
     */
    public function  changePermission($src_file, $permissions)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-change-fs-file-permission', Auth::User()->nickname, $src_file, $permissions);
    }

    /**
     * @param $src_dir
     * @param $dst_dir
     * @return mixed
     */
    public function  copyDir($src_dir, $dst_dir)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-copy-fs-directory', Auth::User()->nickname, $src_dir, $dst_dir);
    }

    /**
     * @param $src_dir
     * @param $dst_dir
     * @return mixed
     */
    public function  copyFile($src_dir, $dst_dir)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-copy-fs-file', Auth::User()->nickname, $src_dir, $dst_dir);
    }

    /**
     * @param $dst_dir
     * @return mixed
     */
    public function  deleteDir($dst_dir)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-delete-fs-dir', Auth::User()->nickname, $dst_dir);
    }

    /**
     * @param $dst_file
     * @return mixed
     */
    public function  deleteFile($dst_file)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-delete-fs-dir', Auth::User()->nickname, $dst_file);
    }

    /**
     * @param $src_file
     * @param $dst_dir
     * @return mixed
     */
    public function extractArchive($src_file, $dst_dir)
    {
        $this->vst_returncode = 'no';
        return $this->sendQuery('v-extract-fs-archive', Auth::User()->nickname, $src_file, $dst_dir);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function listDirectory($path)
    {
        $this->vst_returncode = 'no';
        $responseVesta = $this->sendQuery('v-list-fs-directory', Auth::User()->nickname, $path);
        return $this->parseListing($responseVesta);
    }


    /**
     * @param $raw
     * @return array
     */
    public function parseListing($raw)
    {

        $raw = explode(PHP_EOL, $raw);
        $raw = array_filter($raw);
        $data = [];

        foreach ($raw as $o) {
            $info = explode($this->delimeter, $o);

            $value = [
                'type' => $info[$this->info_positions['TYPE']],
                'permissions' => $info[$this->info_positions['PERMISSIONS']],
                'date' => $info[$this->info_positions['DATE']],
                'time' => $info[$this->info_positions['TIME']],
                'owner' => $info[$this->info_positions['OWNER']],
                'group' => $info[$this->info_positions['GROUP']],
                'size' => $info[$this->info_positions['SIZE']],
                'name' => (!empty($info[$this->info_positions['NAME']])) ? $info[$this->info_positions['NAME']] : '../'
            ];

            array_push($data, $value);
        }

        return $data;
    }








}
