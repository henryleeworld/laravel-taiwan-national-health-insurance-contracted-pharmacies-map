@extends('layouts.main') @section('content')
<div id="sidebar" class="sidebar collapsed">
    <!-- Nav tabs -->
    <div class="sidebar-tabs">
        <ul role="tablist">
            <li><a href="#home" role="tab"><i class="fa fa-bars"></i></a></li>
            <li><a href="#book" role="tab"><i class="fa fa-book"></i></a></li>
            <li><a href="#settings" role="tab"><i class="fa fa-gear"></i></a></li>
        </ul>
    </div>
    <!-- Tab panes -->
    <div class="sidebar-content">
        <div class="sidebar-pane" id="home">
            <h1 class="sidebar-header"><span id="sidebarTitle">請點選地圖中的點</span><span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
            <div id="sidebarContent">請點選地圖中的點</div>
            <div class="btn-group-vertical" role="group" style="width: 100%;">
                <a href="https://forms.gle/XAPs8U5eu56dHsTJ9" target="_blank" class="btn btn-primary btn-lg btn-block">藥局的朋友可以點這裡補充資訊</a>
                <a href="https://github.com/henryleeworld/laravel-taiwan-national-health-insurance-contracted-pharmacies-map/issues" target="_blank" class="btn btn-primary btn-lg btn-block">網站問題反應</a>
            </div>
        </div>
        <div class="sidebar-pane" id="book">
            <h1 class="sidebar-header"><span id="weekTitle">說明</span><span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
            <div>
                圖示說明：
                <ul>
                    <li><span style="color:#ccc">▲</span>：目前沒有資料，無法判斷庫存情況</li>
                    <li><span style="color:#48c774">▲</span>：成人口罩 > 100 且兒童口罩 > 25</li>
                    <li><span style="color:#ffdd57">▲</span>：成人口罩 > 40 且兒童口罩 > 10</li>
                    <li><span style="color:#fc82b1">▲</span>：成人口罩 > 20 且兒童口罩 > 5</li>
                    <li><span style="color:#f00">▲</span>：成人口罩
                        <=2 0 或兒童口罩 <=5 </li>
                            <li>藍色圓點：你目前所在位置（需要同意網站授權）</li>
                </ul>
                注意事項：
                <ul>
                    <li>部分藥局因採發放號碼牌方式，方便民眾購買口罩，因目前無法顯示顯示已發送號碼牌數量。若看到剩餘數量，請先電洽藥局</li>
                    <li>口罩的取得須依政府頒布的規則辦理</li>
                    <li>庫存數量僅供參考，實際庫存仍以個別單位現場為準</li>
                    <li><a href="https://www.nhi.gov.tw/Content_List.aspx?n=395F52D193F3B5C7&topn=787128DAD5F71B1A" target="_blank">健保署說明</a></li>
                </ul>
                <img src="images/policy.jpg" style="width: 400px;" />
            </div>
        </div>
        <div class="sidebar-pane" id="settings">
            <h1 class="sidebar-header"><span id="weekTitle">設定</span><span class="sidebar-close"><i class="fa fa-caret-left"></i></span></h1>
            <div>
                <a href="#" class="btn btn-primary btn-lg btn-block" id="btn-geolocation">回到目前位置</a>
                <p>
                    <hr />
                </p>
                <div class="card">
                    <h5 class="card-title">搜尋</h5>
                    <div class="form-group">
                        <label for="findPoint">名稱或代號</label>
                        <input type="text" id="findPoint" name="findPoint" class="form-control"></input>
                    </div>
                </div>
                <p>
                    <hr />
                </p>
                <div class="card">
                    <h5 class="card-title">行政區過濾</h5>
                    <div class="form-group">
                        <label for="selectCounty">縣市</label>
                        <select id="selectCounty" name="selectCounty" class="form-control form-select"></select>
                    </div>
                    <div class="form-group">
                        <label for="selectTown">鄉鎮市區</label>
                        <select id="selectTown" name="selectTown" class="form-control form-select"></select>
                    </div>
                    <div class="form-group">
                        <label for="selectCunli">村里</label>
                        <select id="selectCunli" name="selectCunli" class="form-control form-select"></select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection