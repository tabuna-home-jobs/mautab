@extends('admin')

@section('content')


    <div class="col">
        <!-- main header -->
        <div class="bg-light lter b-b wrapper-md">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
                    <small class="text-muted">Welcome to angulr application</small>
                </div>
                <div class="col-sm-6 text-right hidden-xs">
                    <div class="inline m-r text-left">
                        <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
                        <div ng-init="d3_1=[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ]"
                             ui-jq="sparkline"
                             ui-options="[106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}"
                             class="sparkline inline">
                            <canvas width="101" height="20"
                                    style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas>
                        </div>
                    </div>
                    <div class="inline text-left">
                        <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
                        <div ng-init="d3_2=[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ]"
                             ui-jq="sparkline"
                             ui-options="[105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}"
                             class="sparkline inline">
                            <canvas width="101" height="20"
                                    style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / main header -->
        <div class="wrapper-md ng-scope" ng-controller="FlotChartDemoCtrl">
            <!-- stats -->
            <div class="row">
                <div class="col-md-5">
                    <div class="row row-sm text-center">
                        <div class="col-xs-6">
                            <div class="panel padder-v item">
                                <div class="h1 text-info font-thin h1">521</div>
                                <span class="text-muted text-xs">New items</span>

                                <div class="top text-right w-full">
                                    <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <a href="" class="block panel padder-v bg-primary item">
                                <span class="text-white font-thin h1 block">930</span>
                                <span class="text-muted text-xs">Uploads</span>
                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a href="" class="block panel padder-v bg-info item">
                                <span class="text-white font-thin h1 block">432</span>
                                <span class="text-muted text-xs">Comments</span>
                <span class="top text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <div class="panel padder-v item">
                                <div class="font-thin h1">129</div>
                                <span class="text-muted text-xs">Feeds</span>

                                <div class="bottom text-left">
                                    <i class="fa fa-caret-up text-warning m-l-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 m-b-md">
                            <div class="r bg-light dker item hbox no-border">
                                <div class="col w-xs v-middle hidden-md">
                                    <div ng-init="d3_3=[60,40]" ui-jq="sparkline"
                                         ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}"
                                         class="sparkline inline">
                                        <canvas width="40" height="40"
                                                style="display: inline-block; width: 40px; height: 40px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                                <div class="col dk padder-v r-r">
                                    <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                                    <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel wrapper">
                        <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                            <input type="checkbox" ng-model="showSpline" class="ng-pristine ng-untouched ng-valid"
                                   tabindex="0" aria-checked="true" aria-invalid="false">
                            <i></i>
                        </label>
                        <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>

                        <div ui-jq="plot" ui-refresh="showSpline" ui-options="[
                { data: [[0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7]], label:'TV', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                { data: [[0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3]], label:'Mag', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } }
              ],
              {
                colors: ['#23b7e5', '#7266ba'],
                series: { shadowSize: 3 },
                xaxis:{ font: { color: '#a1a7ac' } },
                yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }" style="height: 246px; padding: 0px; position: relative;">
                            <canvas class="flot-base" width="464" height="246"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 464px; height: 246px;"></canvas>
                            <div class="flot-text"
                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 14px; text-align: center;">
                                        0
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 63px; text-align: center;">
                                        1
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 112px; text-align: center;">
                                        2
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 162px; text-align: center;">
                                        3
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 211px; text-align: center;">
                                        4
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 260px; text-align: center;">
                                        5
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 310px; text-align: center;">
                                        6
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 359px; text-align: center;">
                                        7
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 408px; text-align: center;">
                                        8
                                    </div>
                                    <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 458px; text-align: center;">
                                        9
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; top: 222px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                        0
                                    </div>
                                    <div style="position: absolute; top: 166px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                        5
                                    </div>
                                    <div style="position: absolute; top: 111px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                        10
                                    </div>
                                    <div style="position: absolute; top: 56px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                        15
                                    </div>
                                    <div style="position: absolute; top: 1px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                        20
                                    </div>
                                </div>
                            </div>
                            <canvas class="flot-overlay" width="464" height="246"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 464px; height: 246px;"></canvas>
                            <div class="legend">
                                <div style="position: absolute; width: 43px; height: 44px; top: 12px; right: 9px; opacity: 0.85; background-color: rgb(255, 255, 255);"></div>
                                <table style="position:absolute;top:12px;right:9px;;font-size:smaller;color:#dce5ec">
                                    <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid rgb(35,183,229);overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">TV</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid rgb(114,102,186);overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Mag</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / stats -->

            <!-- service -->
            <div class="panel hbox hbox-auto-xs no-border">
                <div class="col wrapper">
                    <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
                    <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
                    <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>

                    <div ui-jq="plot" ui-options="[
              { data: [[0,50.41],[1,47.92],[2,45.22],[3,46.39],[4,50.4],[5,48.1],[6,49.84],[7,49.54],[8,47.4],[9,44.66],[10,42.63],[11,40.84],[12,36.82],[13,31.92],[14,34.44],[15,33.86],[16,30.8],[17,33.04],[18,35.81],[19,32.64],[20,27.93],[21,30.64],[22,25.79],[23,24.55],[24,24.41],[25,29.38],[26,34.22],[27,31.98],[28,27.64],[29,31.16],[30,31.84],[31,31.84],[32,35.43],[33,36.38],[34,32.94],[35,33.46],[36,33.1],[37,32.6],[38,34.33],[39,37.71],[40,39.78],[41,37.57],[42,35.23],[43,37.25],[44,33.84],[45,36.85],[46,32.67],[47,27.84],[48,29.08],[49,31.53],[50,33.14],[51,36.41],[52,35.82],[53,37.85],[54,36.02],[55,37.77],[56,34.2],[57,37.2],[58,34.63],[59,31.03],[60,32.87],[61,30.73],[62,30.63],[63,31.44],[64,30.2],[65,30.4],[66,31.68],[67,32.3],[68,32.75],[69,30.24],[70,26.67],[71,27.23],[72,29.12],[73,33.74],[74,29.98],[75,30.58],[76,32],[77,30.57],[78,28.97],[79,30.79],[80,34.3],[81,33.13],[82,34.36],[83,33.54],[84,29.28],[85,33.79],[86,29.3],[87,25.05],[88,22.88],[89,22.36],[90,23.19],[91,23.24],[92,21.75],[93,23.28],[94,26.39],[95,21.82],[96,21.08],[97,23.55],[98,23.27],[99,18.93],[100,18.27],[101,22.72],[102,18.02],[103,22.13],[104,20.44],[105,22.35],[106,17.49],[107,20.48],[108,24.49],[109,27.19],[110,26.92],[111,27.98],[112,30.82],[113,30.59],[114,28.47],[115,27.94],[116,26.73],[117,26.26],[118,28.51],[119,33.14],[120,36.09],[121,33.87],[122,38.45],[123,34.29],[124,31.82],[125,35.03],[126,39.41],[127,40.93],[128,41.59],[129,39.9],[130,42.12],[131,41.69],[132,43.37],[133,45.18],[134,43.52],[135,39.31],[136,34.71],[137,35.69],[138,38.27],[139,34.75],[140,34.11],[141,33.16],[142,29.42],[143,29.85],[144,32.72],[145,28.31],[146,23.47],[147,25.34],[148,25.1],[149,27.69]], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ],
            {
              colors: ['#e8eff0'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }" style="height: 240px; padding: 0px; position: relative;">
                        <canvas class="flot-base" width="561" height="240"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 561px; height: 240px;"></canvas>
                        <div class="flot-text"
                             style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                            <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                <div style="position: absolute; top: 226px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                    0
                                </div>
                                <div style="position: absolute; top: 188px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    10
                                </div>
                                <div style="position: absolute; top: 151px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    20
                                </div>
                                <div style="position: absolute; top: 114px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    30
                                </div>
                                <div style="position: absolute; top: 76px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    40
                                </div>
                                <div style="position: absolute; top: 39px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    50
                                </div>
                                <div style="position: absolute; top: 2px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    60
                                </div>
                            </div>
                        </div>
                        <canvas class="flot-overlay" width="561" height="240"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 561px; height: 240px;"></canvas>
                    </div>
                </div>
                <div class="col wrapper-lg w-lg bg-light dk r-r">
                    <h4 class="font-thin m-t-none m-b">Reports</h4>

                    <div class="">
                        <div class="">
                            <span class="pull-right text-primary">60%</span>
                            <span>Consulting</span>
                        </div>
                        <div class="progress progress-xs m-t-sm bg-white">
                            <div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="60%"
                                 style="width: 60%"></div>
                        </div>
                        <div class="">
                            <span class="pull-right text-info">35%</span>
                            <span>Online tutorials</span>
                        </div>
                        <div class="progress progress-xs m-t-sm bg-white">
                            <div class="progress-bar bg-info" data-toggle="tooltip" data-original-title="35%"
                                 style="width: 35%"></div>
                        </div>
                        <div class="">
                            <span class="pull-right text-warning">25%</span>
                            <span>EDU management</span>
                        </div>
                        <div class="progress progress-xs m-t-sm bg-white">
                            <div class="progress-bar bg-warning" data-toggle="tooltip" data-original-title="23%"
                                 style="width: 25%"></div>
                        </div>
                    </div>
                    <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin
                        venenatis</p>
                </div>
            </div>
            <!-- / service -->

        </div>
    </div>









@endsection