<?php namespace Mautab\Http\Controllers\Hosting;

use Flash;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\AddDNSRequest;
use Mautab\Http\Requests\ChangeDNSRequest;
use Mautab\Http\Requests\RemoveDNSRequest;
use Vesta;

class DnsController extends Controller
{


    public function Index()
    {
        $DnsList = Vesta::listDNS();
        return view('user/dns/index', [
            'DnsList' => $DnsList
        ]);
    }

    public function show($name)
    {
        return view('user/dns/editList', [
            'DnsList' => Vesta::listOnlyDNS($name)
        ]);
    }

    public function update(ChangeDNSRequest $request)
    {
        Vesta::changeDNSDomainExp($request->dns, $request->exp);
        Vesta::changeDNSDomainTtl($request->dns, $request->ttl);
        Flash::success('Вы успешно изменили ДНС.');
        return redirect()->route('dns.index');

    }

    public function store(AddDNSRequest $request)
    {

        Vesta::addDNSDomain(
            $request->v_domain,
            $request->v_ip,
            $request->v_ns1,
            $request->v_ns2
        );

        Flash::success('Вы успешно добавили DNS.');
        return redirect()->route('dns.index');
    }

    public function destroy(RemoveDNSRequest $request)
    {
        Vesta::deleteDNDDomain($request->v_domain);
        Flash::success('Вы успешно удалили Домен.');
        return redirect()->route('dns.index');
    }


}
