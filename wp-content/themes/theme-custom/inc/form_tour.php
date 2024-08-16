<div class="main-home ng-scope" ng-app="Contracting" ng-controller="homepage.ctrl">
  <div class="col-xs-12 no-padding">
    <div class="hero-container" id="hero-banner-home"
      data-href="https://www.ivivu.com/khach-san-da-nang/intercontinental-danang-sun-peninsula-resort"
      style="background-image:url(https://cdn1.ivivu.com/images/2024/06/18/11/InterContinental_dn-t_hbekz7_.webp); cursor: pointer;">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="col-xs-12 col-lg-8 no-padding">
              <div class="col-xs-12 no-padding hero-form" id="hero-form">
                <div class="col-xs-12 no-padding">
                  <h1 class="hero-heading hero-heading-1">Trải nghiệm kỳ nghỉ tuyệt vời</h1>
                  <h2 class="hero-heading hero-heading-2 hidden-xs">Combo khách sạn - vé máy bay - đưa đón sân bay giá
                    tốt nhất</h2>
                  <h2 class="hero-heading hero-heading-2 visible-xs">Combo khách sạn - vé máy bay - đưa đón tốt nhất
                  </h2>
                </div>
                <div class="col-xs-12 search-form home-page">
                  <div class="row">
                    <!-- ngIf: isShowBizAcc -->
                    <div class="col-xs-12 v-margin-bottom-15 typeahead-container search-fullframe">
                      <div class="col-xs-12 no-padding v_field ">
                        <div class="input-icon" style="position:absolute;">
                          <i class="icon-ic_ivivu_user_location"></i>
                        </div>
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input
                            id="searchText" style="padding-left: 50px; position: relative; vertical-align: top;"
                            type="text" class="form-control v_field__input search-input typeahead tt-input"
                            maxlength="200" placeholder="Bạn muốn đi đâu?" autocomplete="off" spellcheck="false"
                            dir="auto">
                          <pre aria-hidden="true"
                            style="position: absolute; visibility: hidden; white-space: pre; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                          <div class="tt-menu"
                            style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                            <div class="tt-dataset tt-dataset-recents"></div>
                            <div class="tt-dataset tt-dataset-hots"></div>
                            <div class="tt-dataset tt-dataset-locas"></div>
                          </div>
                        </span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 dates t-datepicker">
                      <div class="col-xs-6 no-padding check-in  t-check-in" id="check-in-date-search">
                        <div class="t-dates col-xs-12 v_field t-date-check-in"><i
                            class="vicon vicon-check-in icon"></i><i class="vicon vicon-check-out icon"></i><label
                            class="t-date-info-title"></label>
                          <div class="v_field__content">
                            <p class="v_field__text"><span class="t-day-check-in"> 14</span><span
                                class="t-month-check-in"> tháng 08 </span></p>
                            <p class="v_field__description">Thứ tư</p>
                          </div>
                        </div><input type="text" class="t-input t-input-check-in" value="08-14-2024" name="t-start">
                      </div>
                      <div class="col-xs-6 no-padding check-out  t-check-out">
                        <div class="t-dates col-xs-12 v_field t-date-check-out">
                          <div class="nights"><span class="night">1</span><i
                              class="vicon vicon-free-night-stay icon"></i></div><i
                            class="vicon vicon-check-in icon"></i><i class="vicon vicon-check-out icon"></i><label
                            class="t-date-info-title"></label>
                          <div class="v_field__content">
                            <p class="v_field__text"><span class="t-day-check-out"> 15</span><span
                                class="t-month-check-out"> tháng 08 </span></p>
                            <p class="v_field__description">Thứ năm</p>
                          </div>
                        </div><input type="text" class="t-input t-input-check-out" value="08-15-2024" name="t-end">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 rooms" id="search-form-rooms">
                      <div class="col-xs-12 v_field">
                        <div class="v_field__icon-container">
                          <i class="vicon vicon-travelers icon"></i>
                        </div>
                        <div class="v_field__content ng-hide"
                          ng-hide="FilterRooms.RoomsRequest[0] &amp;&amp; FilterRooms.RoomsRequest[0].Adults">
                          <p class="v_field__text">2 người lớn, 0 trẻ em</p>
                          <p class="v_field__description">1 Phòng</p>
                        </div>
                        <div class="v_field__content"
                          ng-show="FilterRooms.RoomsRequest[0] &amp;&amp; FilterRooms.RoomsRequest[0].Adults">
                          <p class="v_field__text ng-binding">2 người lớn, 0 trẻ em</p>
                          <p class="v_field__description ng-binding">1 Phòng</p>
                        </div>
                      </div>

                      <div class="col-xs-12 room-popover room-popover-header" data-display="false"
                        style="display: none">
                        <div class="col-xs-12 room-popover__inner">
                          <div id="dragHandle" class="drag-handle"></div>
                          <div style="display: flex" class="col-xs-12 room-popover__item">
                            <div class="col-xs-6 room-popover__quantity no-padding">
                              <div class="div-title">Phòng</div>
                            </div>
                            <div class="col-xs-6 no-padding text-right div-passenger">
                              <div class="btn-group div-number-passenger">
                                <span
                                  ng-click="RoomNumber.value > 1 &amp;&amp; PlusOrMinusObject('room','-',1,RoomConfig.length)"
                                  ng-class="{'disabled': RoomNumber.value === 1}" class="ivvcon-less disabled"><span
                                    class="path1"></span><span class="path2"></span><span
                                    ng-class="{'disabled': RoomNumber.value === 1}"
                                    class="path3 disabled"></span></span>
                                <div class="quantity ng-binding">1</div>
                                <span ng-click="PlusOrMinusObject('room','+',1,RoomConfig.length)"
                                  class="ivvcon-more"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></span>
                              </div>
                            </div>
                          </div>
                          <div style="display: flex" class="col-xs-12 room-popover__item deline">
                            <div class="col-xs-6 room-popover__quantity no-padding">
                              <div class="div-title">Người Lớn</div>
                              <div class="div-detail ng-binding">Từ 18 tuổi</div>
                            </div>
                            <div class="col-xs-6 no-padding text-right div-passenger">
                              <div class="btn-group div-number-passenger">
                                <span ng-click="PlusOrMinusObject('adult','-',RoomNumber.value ,AdultsConfig.length)"
                                  class="ivvcon-less"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></span>
                                <div class="quantity ng-binding">2</div>
                                <span ng-click="PlusOrMinusObject('adult','+',RoomNumber.value,AdultsConfig.length)"
                                  class="ivvcon-more"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></span>
                              </div>
                            </div>
                          </div>
                          <div style="display: flex" class="col-xs-12 room-popover__item deline">
                            <div class="col-xs-6 room-popover__quantity no-padding">
                              <div class="div-title">Trẻ Em</div>
                              <div class="div-detail ng-binding">Từ 0 - 17 tuổi</div>
                            </div>
                            <div class="col-xs-6 no-padding text-right div-passenger">
                              <div class="btn-group div-number-passenger">
                                <span ng-click="PlusOrMinusObject('child','-',0,ChildConfig.length)"
                                  class="ivvcon-less"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></span>
                                <div class="quantity ng-binding">0</div>
                                <span ng-click="PlusOrMinusObject('child','+',0,ChildConfig.length)"
                                  class="ivvcon-more"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 room-popover__item child-age-selection div-destop ng-hide"
                            ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">
                            <div class="v-margin-bottom-5 title-child ng-hide"
                              ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">Độ tuổi trẻ em</div>
                            <ul class="child-ages">
                              <!-- ngRepeat: itemAge in FilterRooms.RoomsRequest[0].AgeChilds track by $index -->
                            </ul>
                          </div>
                          <!--<div class="col-xs-12 room-popover__item child-age-selection-mb  div-mobile" ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">

                                                    <ul class="child-ages">
                                                        <li class="col-xs-12 child-ages__item" ng-repeat="itemAge in FilterRooms.RoomsRequest[0].AgeChilds track by $index">
                                                            <div class="col-xs-6 child-age-index">Tuổi trẻ em {{$index + 1}}</div>
                                                            <div class="col-xs-6 no-padding select-child">
                                                                <select name="name" class="form-control" ng-model="FilterRooms.RoomsRequest[0].AgeChilds[$index]" ng-options="option.label for option in AgeChildConfig track by option.value"></select>-->

                          <!--</div>
                                                        </li>
                                                    </ul>
                                                </div>-->
                        </div>
                        <div class="col-xs-12 room-popover__item request-group-popover none-padding">
                          <div class="col-xs-6 room-popover__quantity no-padding div-contact">
                            <div class="div-group">Đặt đoàn/ nhóm</div>

                            <a class="div-link" href="/yeu-cau-khach-doan" target="_blank">Liên hệ</a>

                          </div>
                          <div class="col-xs-12 btn-search-mb">
                            <button ng-click="SearchHotel()"
                              class="btn btn-action btn-block  search-form-button btn-big">
                              <b> Tìm <span class="visible-xs-inline-block">Kiếm</span></b>
                            </button>
                          </div>
                          <p class="close-popup-filter close-popup"><span class="ivvcon-colapse"><span
                                class="path1"></span><span class="path2"></span><span class="path3"></span></span></p>

                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 ">
                      <button ng-click="SearchHotel()" class="btn btn-action btn-block  search-form-button btn-big">
                        <b> Tìm <span class="visible-xs-inline-block">kiếm</span></b>
                      </button>
                    </div>
                    <!-- ngIf: isShowBizAcc -->
                  </div>
                </div>
              </div>
              <div class="col-xs-12 hidden-xs" style="height:100px">
                &nbsp;
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>