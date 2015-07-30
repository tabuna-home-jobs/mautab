<?php namespace Mautab\Services\VestaAPI;

use Auth;

trait VestaFileSystem
{

    public function  moveFile($src, $dst)
    {
        return $this->sendQuery('v-move-fs-file', Auth::User()->nickname, $src, $dst);
    }


    // Тут наверное необходимо указать json? иначе будет ппц или нет?
    public function  openFile($patch)
    {
        return $this->sendQuery('v-open-fs-file', Auth::User()->nickname, $patch);
    }


    public function  addDir($patch)
    {
        return $this->sendQuery('v-add-fs-directory', Auth::User()->nickname, $patch);
    }


    public function  addFile($patch)
    {
        return $this->sendQuery('v-add-fs-file', Auth::User()->nickname, $patch);
    }

    public function  changePermission($src_file, $permissions)
    {
        return $this->sendQuery('v-change-fs-file-permission', Auth::User()->nickname, $src_file, $permissions);
    }


    public function  copyDir($src_dir, $dst_dir)
    {
        return $this->sendQuery('v-copy-fs-directory', Auth::User()->nickname, $src_dir, $dst_dir);
    }


    public function  copyFile($src_dir, $dst_dir)
    {
        return $this->sendQuery('v-copy-fs-file', Auth::User()->nickname, $src_dir, $dst_dir);
    }


    public function  deleteDir($dst_dir)
    {
        return $this->sendQuery('v-delete-fs-dir', Auth::User()->nickname, $dst_dir);
    }

    public function  deleteFile($dst_file)
    {
        return $this->sendQuery('v-delete-fs-dir', Auth::User()->nickname, $dst_file);
    }


    public function extractArchive($src_file, $dst_dir)
    {
        return $this->sendQuery('v-extract-fs-archive', Auth::User()->nickname, $src_file, $dst_dir);
    }


    public function listDirectory($path)
    {
        return $this->sendQuery('v-list-fs-directory', Auth::User()->nickname, $path);
    }


}
