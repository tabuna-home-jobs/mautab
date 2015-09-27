<?php namespace Mautab\Http\Controllers\Hosting;


use Flash;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\BackupRequest;
use Mautab\Http\Requests\RestoreBackup;
use Vesta;

class BackupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('user/user/backup', [
            'Backups' => Vesta::listUserBackups()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(RestoreBackup $request)
    {
        Vesta::restoreBackup([
            $request->type => $request->object,
            "backup" => $request->backup,
        ]);

        Flash::success('Востановление резервной копии началось, это может занять некоторое время.');
        return redirect()->route('backup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($backup)
    {
        $backupDetal = Vesta::showUserBackup($backup)["$backup"];
        return view('user/user/backupDetal', [
            'Backup' => $backupDetal,
            'name' => $backup
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(BackupRequest $backup)
    {
        Vesta::deleteUserBackup($backup->backup);
        Flash::success('Вы успешно удалили резервную копию.');
        return redirect()->route('backup.index');
    }

}