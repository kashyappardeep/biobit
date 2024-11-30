@include('layouts.header')
<div class="Authlayout_layout_outer__XO5sX">
   <div class="Authlayout_layout_in__zOGYA">
      <div class="Dashboard_dashboard__+LgAQ">
         <div class="Dashboard_dashboard_in__H+j3j">
            <div class="Dashboard_col_8__Y0Ipo">
               <div>
                  <div class="Referral_referral_wrap__gXVJv">
                     <div class="Referral_graph__GDo2u">
                        <div class="circle_in">
                          
                            <p class="deposit_alert">Id Activation</p>
                            <p class="text-center text_yellow" title="0%">30$<br>
                              @if ($user->activation == 0 )
                              <form  id="activateForm" method="POST" action="{{ route('id_activate') }}">
                                 @csrf
                                 <input type="hidden" name="user_id" value="1">
                                 <input type="hidden" name="transaction_hash" id="transactionHashInput" value="">
                                 <button  id="checkApproveButton" class="Button_button__w+JtY " type="submit">
                                    Activate Now
                                 </button>
                             </form>
                             @else
                             <button class="Button_button__w+JtY" type="button" readonlu 
                             style="background: linear-gradient(9deg, #2cb7ab 4.52%, #2f4ab4 121%);
                               color: #20e908;">
                             Id Activated
                          </button>
                              @endif
                            </p>
                           
                         </div>
                        <div class="circle_loading">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 517 84" width="517" height="84" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"><defs><clipPath id="__lottie_element_1818"><rect width="517" height="84" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_1818)"><g transform="matrix(1,0,0,1,234.39500427246094,5.724998474121094)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(1,0,0,1,281.8949890136719,5.724998474121094)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(1,0,0,1,334.14501953125,5.724998474121094)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(1,0,0,1,377.89501953125,5.724998474121094)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(1,0,0,1,422.89501953125,5.724998474121094)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(0.9591712355613708,0,0,0.9591712355613708,461.22412109375,7.230560302734375)" opacity="0.9591712485143686" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(0.5,0,0,0.5,416.8324890136719,24.162498474121094)" opacity="0.5" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(0.5,0,0,0.5,461.8324890136719,24.162498474121094)" opacity="0.5" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(0.5,0,0,0.5,510.5824890136719,24.162498474121094)" opacity="0.5" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g><g transform="matrix(0.5,0,0,0.5,557.33251953125,24.162498474121094)" opacity="0.5" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,-200.125,36.875)"><path fill="rgb(245,218,118)" fill-opacity="1" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-10.5 C5.794950008392334,-10.5 10.5,-5.794950008392334 10.5,0 C10.5,5.794950008392334 5.794950008392334,10.5 0,10.5 C-5.794950008392334,10.5 -10.5,5.794950008392334 -10.5,0 C-10.5,-5.794950008392334 -5.794950008392334,-10.5 0,-10.5z"></path></g></g></g>
                        </svg>
                        </div>
                        <div class="circle_in">
                           <div class="circle_text">
                            
                           </div>
                           <p class="deposit_alert">Available Balance</p>
                            <p class="text-center text_yellow" title="0%">
                              $ {{$user->activation_balance}}<br>
                              <form method="POST" action="{{ route('withdrawal')}}">
                                 @csrf
                                 <input type="hidden" name="user_id" value="1">
                                 <button class="Button_button__w+JtY" type="submit">
                                    Withdraw
                                 </button>
                             </form>
                           </p>
                           
                        </div>
                     </div>
                  </div>
                  <div class="StakeCard_stake_card__-XwgS">
                     <div class="StakeCard_skymarvel_card__Oq3i3">
                        <div class="StakeIncomeCard_skymarvel_inner__14B59 ">
                           <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAYAAAAqXEs9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUBSURBVHgBvVdvTttYEJ95tp+ABK05wYYPBSqtVHOCJSconKDhBKQqRPuN8K0LrBJO0PQEpScIPUGCtCob+gHfAIsmS2TH7+2MabLBmMQhoSNZOO+Zeb/595t5CDOS9t97jhIqByhs/o2g3R703KWXVXcSPQhTSvuf3SIIsU+K7MQPNLg60FvZ346aKdSBgClFGJFVtlbqrbDEcmblEPnRoNfJS2e0mTMMw0utD6aUhRfHVQLkgsDX88vv3f56EAaeBtxQGg7mX/6//uyAWMJQbSMd/v1id6O/ZgmzzEBNJWowgZgwA+kZ6EkEDw3xqX1Zitbuckqfdbvd1OGaCaDri2LOAqxT0nha6c8aMQJAOeQYiK+sjPWJfubT6psakCGkw95Qvs4HQeDOzd1V2zyVe/tbqYgaK5PomxpQKP0zoyc9kFiXUtrqxzqFziM3kWBtAnXTJfV1o2jLnvxAB7NXzjXCW4Uizw8o/ZGUU/h0odPa3U+r88nEyLkjhayTSTaocDuz+tdp0nedVqlMp+yDVuXM6vHBOL1P9pBlWB+QzBE9sT4M5qZV2mSw/d+Z1cMyefCAWkq5/ZVY/TkA3VIImHdCFNtx0hOgq6aQheE1BkVVd4Im7g+DnQkgVqhAFDhZF1+8P4M4UMRfSembm6/vNof3AisgokSPPQuzBGSAtcH9SYR4Lx/al9TtKSzERSdUXF8M03w9vL+0XPUUwgl7losBZgbIwB32zqP9SWk3UH45s/LndnwrMP0aGeNZ82YBZgHo+iqyzNGgvsT3sitHzbs8ERVpyKukBGYvodZNbroDneStYY9NBMjsmk704kPibGOEQZVHEK3hIwHbSfqGiPNcCHzF78xPVkZeyYy8Jnq44vx8GlObuHFzsedEU2G311xar3rc6ZUh6jR31IgN6EBMbKpao4eo7U5rrwGIDoX4JDTxzFRQ4YRPBeiaEtYCqOAPV6OAihFxKgJZB53LvZofBgdSS+IbpEoDV4HeeqCHQiMEgdVoEygg2sgvrt1V6vdWyREIO2NDxiOqBGwIwBy3hvhUSE80C3HeEJBfOGnpu6YKwRmej/hdLsgGkeQmE+XCytF6nzYioEQVZKA7snX8e1mqUAkXuZSza0cjWXbQIuJCMzUBPY30EB3QQpELYOC1qAXRiCLIYK3zDwDdtt69IeKjwR1dtoZn5ezacRVSiCZLu/bcoGLCIKTQYD3aC9VBXE+/H3IL4hAzUHwABo2IK7iD8zy8yL1oCqHkPVWI9uLK4cZjYDAU+T6vmXEwXLKB5RdlIOsC9Q7dt04fu8Jw7LnC+G9/MBuWHpiUd/g70iiSBgyLiIPJrh4WmMB8y89HSSahzpfA+GFU9gWqsAa/05haVpTU8UcwDRDvZG6D8gAMV6whG0lgWDAO5p4lxMzsKcqAnPYhP+wp3rMCK8dxv734I9czIRcHjTr07iVwRB9Yp4nAne8EeSTvPvifzrcSl6Ljh/5y0rV3FKhJhA0P0eCkPs90/M0kMCyCBqwtvj9xTJNmlTThGyfMZVGxaPicpeR+DAxLVGXscm2oOoUNfOXnR3sKHOYWSClEkvbdVXs8lw0APRHUKTfKsQcIYm4QzfgwNxZQWlA8FUaDGLUMStgazFju9TIuQS5FLsmknOqDYcJ8DjAsib0syVPDYKZl74kBxUH1m+NzgxkJ6B4ogNzPAJNKGBTdKArwk+Q/I7fM3sdUG1MAAAAASUVORK5CYII="
                              alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_content__r4tea">
                              <p>Total BBC Token</p>
                              <h4 title="0">{{$total_Principle}}<span> BBC</span></h4>
                           </div>
                        </div>
                        <div class="StakeIncomeCard_skymarvel_inner__14B59 ">
                           <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAYAAAAqXEs9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUBSURBVHgBvVdvTttYEJ95tp+ABK05wYYPBSqtVHOCJSconKDhBKQqRPuN8K0LrBJO0PQEpScIPUGCtCob+gHfAIsmS2TH7+2MabLBmMQhoSNZOO+Zeb/595t5CDOS9t97jhIqByhs/o2g3R703KWXVXcSPQhTSvuf3SIIsU+K7MQPNLg60FvZ346aKdSBgClFGJFVtlbqrbDEcmblEPnRoNfJS2e0mTMMw0utD6aUhRfHVQLkgsDX88vv3f56EAaeBtxQGg7mX/6//uyAWMJQbSMd/v1id6O/ZgmzzEBNJWowgZgwA+kZ6EkEDw3xqX1Zitbuckqfdbvd1OGaCaDri2LOAqxT0nha6c8aMQJAOeQYiK+sjPWJfubT6psakCGkw95Qvs4HQeDOzd1V2zyVe/tbqYgaK5PomxpQKP0zoyc9kFiXUtrqxzqFziM3kWBtAnXTJfV1o2jLnvxAB7NXzjXCW4Uizw8o/ZGUU/h0odPa3U+r88nEyLkjhayTSTaocDuz+tdp0nedVqlMp+yDVuXM6vHBOL1P9pBlWB+QzBE9sT4M5qZV2mSw/d+Z1cMyefCAWkq5/ZVY/TkA3VIImHdCFNtx0hOgq6aQheE1BkVVd4Im7g+DnQkgVqhAFDhZF1+8P4M4UMRfSembm6/vNof3AisgokSPPQuzBGSAtcH9SYR4Lx/al9TtKSzERSdUXF8M03w9vL+0XPUUwgl7losBZgbIwB32zqP9SWk3UH45s/LndnwrMP0aGeNZ82YBZgHo+iqyzNGgvsT3sitHzbs8ERVpyKukBGYvodZNbroDneStYY9NBMjsmk704kPibGOEQZVHEK3hIwHbSfqGiPNcCHzF78xPVkZeyYy8Jnq44vx8GlObuHFzsedEU2G311xar3rc6ZUh6jR31IgN6EBMbKpao4eo7U5rrwGIDoX4JDTxzFRQ4YRPBeiaEtYCqOAPV6OAihFxKgJZB53LvZofBgdSS+IbpEoDV4HeeqCHQiMEgdVoEygg2sgvrt1V6vdWyREIO2NDxiOqBGwIwBy3hvhUSE80C3HeEJBfOGnpu6YKwRmej/hdLsgGkeQmE+XCytF6nzYioEQVZKA7snX8e1mqUAkXuZSza0cjWXbQIuJCMzUBPY30EB3QQpELYOC1qAXRiCLIYK3zDwDdtt69IeKjwR1dtoZn5ezacRVSiCZLu/bcoGLCIKTQYD3aC9VBXE+/H3IL4hAzUHwABo2IK7iD8zy8yL1oCqHkPVWI9uLK4cZjYDAU+T6vmXEwXLKB5RdlIOsC9Q7dt04fu8Jw7LnC+G9/MBuWHpiUd/g70iiSBgyLiIPJrh4WmMB8y89HSSahzpfA+GFU9gWqsAa/05haVpTU8UcwDRDvZG6D8gAMV6whG0lgWDAO5p4lxMzsKcqAnPYhP+wp3rMCK8dxv734I9czIRcHjTr07iVwRB9Yp4nAne8EeSTvPvifzrcSl6Ljh/5y0rV3FKhJhA0P0eCkPs90/M0kMCyCBqwtvj9xTJNmlTThGyfMZVGxaPicpeR+DAxLVGXscm2oOoUNfOXnR3sKHOYWSClEkvbdVXs8lw0APRHUKTfKsQcIYm4QzfgwNxZQWlA8FUaDGLUMStgazFju9TIuQS5FLsmknOqDYcJ8DjAsib0syVPDYKZl74kBxUH1m+NzgxkJ6B4ogNzPAJNKGBTdKArwk+Q/I7fM3sdUG1MAAAAASUVORK5CYII="
                              alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_content__r4tea">
                              <p>Total Income</p>
                              <h4 title="0">{{$user->activation_balance}}<span> Usdt</span></h4>
                           </div>
                        </div>
                        <div class="StakeIncomeCard_skymarvel_inner__14B59 ">
                           <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img
                              src="data:image/png;base64,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"
                              alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_content__r4tea">
                              <p>Total Withdraw</p>
                              <h4 title="0">{{$withdraw}}<span> Usdt</span></h4>
                           </div>
                        </div>
                     </div>
                     
                     <div class="StakeCard_card_information__XR38V">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,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"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>Staking Income</p>
                                       <h4 title="0">{{$Self_Earned}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAgCAYAAACYTcH3AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALYSURBVHgB7VddTttAEJ4Z24ESKOYEDQ/l5wlzgpITVD1BzQlwJRL1LfCGGiTMCZregJ6AcAJaqWogLzUnwLSBhsTe6awjR6StqJGskId+UpL1aNY7mZ395luER8BlyytZaHlIMM8Krvrc9xdW/QBhzNCBFKhwzAgX8hjIp4TAa9yDsgljhkEFB5Dt2aX6Ymq7bldPwWR37MHoQOQrHDEBh0A0TzBByD0znbNtDwhf6rEUZNCL+7u6OLPMzTUz31sVFw2qgYLPzHgCiI4u1qzzcw3GNOA1MB7NrtS9ueV3Oz2zV5b0lDpfKk6W+bnXjGK+SMcLi35SqDxl2FnmPqhmrs6qnkm8psdxDCdPV+sNyBGZM3PTrh7INtRYCkExLBgGvu98lWLNEZkyc/nNs7kPngIqzy3tNbXt+ry6gyZtydCHnJApM9Pd6WTPzSih7wQxcgA5Y/JIb0BUVBOSshkgRFZ+cXl/F8YM+tHa3kCiA2Q4VEhlOYhvAGlH22HMMKUIHWAIikJSqVG66JZkakOGTRgjSMTNH4SUdNFHwEQV8GQFwwlf8MhWScct3X3uTneTbYsgGtoN5GfyE47Ogysa2BNoial/8Tb+bdvZvjz1RtbUPQ01u071C6fyItCByamyRY+UKKL1J6t7QercOd9uINCLoY/IAwbeFPnYSH30CSSDjsXeHFjQIeBgZqm+PgzwnvUSQf6z9bYUkXJR2r2EGBps+HcDGQbUrriywEby35Aac8/3mn/xcUTPuLKABAyfip1eA9f9kcxkXe8/UmS+N+mCK8yY0qXJhYSH+CjvlpH5aFszpo9IbowkAeBHYWgvbz2DyQ3PsGoZXF3du9Ki1XpG7kBazxxBDlAxfzAtw7K1evuXc+IQRcNnJgiFpEL1gK2+D0TKzvyim3blWJOhUmpTMuQYBHIlUbuzK/u5Kb3MgvzW6r+yegVfkxqhMK+Cw2KOgUwcfgF40C2OtRGfRwAAAABJRU5ErkJggg=="
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>Level Income</p>
                                       <h4 title="0">{{$Level_incoum}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASTSURBVHgBtVdRThtJEK3qHk8cDI45QQZpA2G1H3CC2DfwniDhBBhtbOUP+MtCVmFPYHMC4ASQE+BIq7A4K+Eb2DEYjMfdtdUdhthD22ACT4IZdfV0v66uelVGGILTo7dZRMybd631QfrXv3bhkYDxgcZhIZNIJXYQMMvWph0kyABRtXse5qYXt5rwwBDxgScpf9UQIK1XUi82ps0fAS2BwMCf8MujFmscFYL2cWnHeBHGwIAnGieFjB/6DR6upGb/XOq38eJrPHu12+5Ou7xhCPjC3+c5gVY650Gv/nR+qw53wIAnkp1kxjw14nZ8ookL8/QmkwuuhZ7IRNkQsItKsa+lf3JWKzXatWLZEIS7kugkO/aEqHo3NiLAwNoulTMmtILvxDmOCGFFgVjij/bM1RoPjSJyIzDPa8V9Igy6upubvnJn5Grk2ROzGzPDFjs7Kr5BiWVF8Ht6bsNm08XRu4Ck5jWpmZrbXLwTieuPgF1LsAtITfZC3hAQPbH4dP59HUaAOLswFjMmUO0VcaxMzX84iH9zIzvMJqhEjgi22a0z7JUcaNq+CwF7KkfQ9pK9qrUhOONpwBOt41JeEGVRwDPXZNLwTRNU0/ObFRgT7VqJ+Nv1qbmNtbjNM/++33liBwxTgU2zmWshlPBMEixzuq72x8zPwpLwPf8jPwINIjf14v3BqA9a/5XyTKScwIQRrhyMASTtzCxhU4cgz9G7chsBg/QvG7sctOsm9cZRRlbdxdRFr+Ik4YEX2Eko6+Z59k9xYdhCkU32hE0/khjAHTE5u1nFIXVnIDts5fTx0EXESLqxtWrFN/DA8KIXVHoB8IqTZ12d6Z9IHQxAsheQnoegsvKmxAySZr3wJ7xlQq7GDKFh95LCPVcw41mtuMD3ewj3QL8yDhCIipmADOvNZ7sRwCsOjLorqzxzV6df340V5XZRUs303GbVZYskHvsEziix9vShK6tG+/QeiDxrehA+YKXfNqwdEPDAIEU2lqJs64cCsJ5LJpMD8eYk0fryR759XLxXnHDK1+2L1tm4TYC2PWun02kOjjuAUnKm4FC9GAVbAIEOBNJy60spH42bgyGK16Zri3dmHjwCUMkl4HZAerDD3VUTiRtm7rpYaT+l2pcr8fmPQuIqI2bOrLBx08zhzxV0xZXOlrRr0Kgii1GZurQ4+Zs7DV0w+sApWOD0fMVLZ+J2QqqHKlwyc0IKtyK9cHpCJcJd2ePK6iPfIVTjm4QX4Vr8XhucmglAqw9a0yd+fo6vi4R1U6tQ4LKnEwEP5Yd6wuD869sCkeAST5WuCtcN66hNc/0QYg04sQLFXdltHZgRLiVVhu8oO/nyw9ZIsYrExWXj0+5Nvdy0J7nuIfH2fiRC/5WPFKsUt2JCiRmjfqY14/7s78jGte46yKKS7vWgbq6sdTS80n77t1QwxQ0V1e23T2Tm1uy4cm3lB3vboNyQ5AhSJkyFLbPLD+LXYj0m4KOeTFah17seHytF07wxp13VFD2XXaEqSMTnzNK+nx6XBoIXQQfmyc30axI/4vFBCpjtOzXswD1g2r7/AeXBRAGYAuIdAAAAAElFTkSuQmCC"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>Referral Income</p>
                                       <h4 title="0">{{$reffral_income}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,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"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>Royalty Income</p>
                                       <h4 title="0">{{$Royalty   }}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,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"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>Binary Income</p>
                                       <h4 title="0">{{$Binary}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,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"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>My Team</p>
                                       <h4 title="0">{{$Team_count}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,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"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>My Left Team </p>
                                       <h4 title="0">{{$left_team}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-6 col-sm-6">
                              <div class="IncomeCard_card_box__y6IVn">
                                 <div class="IncomeCard_card_box_wrap__-KCFc">
                                    <div class="IncomeCard_card_box_wrap_img__ripT2"><img
                                       src="data:image/png;base64,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"
                                       alt="icon-bg"></div>
                                    <div class="IncomeCard_card_box_wrap_content__UaVoY">
                                       <p>My Right Team </p>
                                       <h4 title="0">{{$right_team}}</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="StakeCard_skymarvel_card__Oq3i3">
                        <div class="StakeIncomeCard_skymarvel_inner__14B59 ">
                           <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAYAAAAqXEs9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUBSURBVHgBvVdvTttYEJ95tp+ABK05wYYPBSqtVHOCJSconKDhBKQqRPuN8K0LrBJO0PQEpScIPUGCtCob+gHfAIsmS2TH7+2MabLBmMQhoSNZOO+Zeb/595t5CDOS9t97jhIqByhs/o2g3R703KWXVXcSPQhTSvuf3SIIsU+K7MQPNLg60FvZ346aKdSBgClFGJFVtlbqrbDEcmblEPnRoNfJS2e0mTMMw0utD6aUhRfHVQLkgsDX88vv3f56EAaeBtxQGg7mX/6//uyAWMJQbSMd/v1id6O/ZgmzzEBNJWowgZgwA+kZ6EkEDw3xqX1Zitbuckqfdbvd1OGaCaDri2LOAqxT0nha6c8aMQJAOeQYiK+sjPWJfubT6psakCGkw95Qvs4HQeDOzd1V2zyVe/tbqYgaK5PomxpQKP0zoyc9kFiXUtrqxzqFziM3kWBtAnXTJfV1o2jLnvxAB7NXzjXCW4Uizw8o/ZGUU/h0odPa3U+r88nEyLkjhayTSTaocDuz+tdp0nedVqlMp+yDVuXM6vHBOL1P9pBlWB+QzBE9sT4M5qZV2mSw/d+Z1cMyefCAWkq5/ZVY/TkA3VIImHdCFNtx0hOgq6aQheE1BkVVd4Im7g+DnQkgVqhAFDhZF1+8P4M4UMRfSembm6/vNof3AisgokSPPQuzBGSAtcH9SYR4Lx/al9TtKSzERSdUXF8M03w9vL+0XPUUwgl7losBZgbIwB32zqP9SWk3UH45s/LndnwrMP0aGeNZ82YBZgHo+iqyzNGgvsT3sitHzbs8ERVpyKukBGYvodZNbroDneStYY9NBMjsmk704kPibGOEQZVHEK3hIwHbSfqGiPNcCHzF78xPVkZeyYy8Jnq44vx8GlObuHFzsedEU2G311xar3rc6ZUh6jR31IgN6EBMbKpao4eo7U5rrwGIDoX4JDTxzFRQ4YRPBeiaEtYCqOAPV6OAihFxKgJZB53LvZofBgdSS+IbpEoDV4HeeqCHQiMEgdVoEygg2sgvrt1V6vdWyREIO2NDxiOqBGwIwBy3hvhUSE80C3HeEJBfOGnpu6YKwRmej/hdLsgGkeQmE+XCytF6nzYioEQVZKA7snX8e1mqUAkXuZSza0cjWXbQIuJCMzUBPY30EB3QQpELYOC1qAXRiCLIYK3zDwDdtt69IeKjwR1dtoZn5ezacRVSiCZLu/bcoGLCIKTQYD3aC9VBXE+/H3IL4hAzUHwABo2IK7iD8zy8yL1oCqHkPVWI9uLK4cZjYDAU+T6vmXEwXLKB5RdlIOsC9Q7dt04fu8Jw7LnC+G9/MBuWHpiUd/g70iiSBgyLiIPJrh4WmMB8y89HSSahzpfA+GFU9gWqsAa/05haVpTU8UcwDRDvZG6D8gAMV6whG0lgWDAO5p4lxMzsKcqAnPYhP+wp3rMCK8dxv734I9czIRcHjTr07iVwRB9Yp4nAne8EeSTvPvifzrcSl6Ljh/5y0rV3FKhJhA0P0eCkPs90/M0kMCyCBqwtvj9xTJNmlTThGyfMZVGxaPicpeR+DAxLVGXscm2oOoUNfOXnR3sKHOYWSClEkvbdVXs8lw0APRHUKTfKsQcIYm4QzfgwNxZQWlA8FUaDGLUMStgazFju9TIuQS5FLsmknOqDYcJ8DjAsib0syVPDYKZl74kBxUH1m+NzgxkJ6B4ogNzPAJNKGBTdKArwk+Q/I7fM3sdUG1MAAAAASUVORK5CYII=" alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_content__r4tea">
                              <p>Power Leg Business</p>
                              <h4 title="0">{{$power_leg_business}}<span> USDT</span></h4>
                           </div>
                        </div>
                        <div class="StakeIncomeCard_skymarvel_inner__14B59 ">
                           <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAlCAYAAAAqXEs9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUBSURBVHgBvVdvTttYEJ95tp+ABK05wYYPBSqtVHOCJSconKDhBKQqRPuN8K0LrBJO0PQEpScIPUGCtCob+gHfAIsmS2TH7+2MabLBmMQhoSNZOO+Zeb/595t5CDOS9t97jhIqByhs/o2g3R703KWXVXcSPQhTSvuf3SIIsU+K7MQPNLg60FvZ346aKdSBgClFGJFVtlbqrbDEcmblEPnRoNfJS2e0mTMMw0utD6aUhRfHVQLkgsDX88vv3f56EAaeBtxQGg7mX/6//uyAWMJQbSMd/v1id6O/ZgmzzEBNJWowgZgwA+kZ6EkEDw3xqX1Zitbuckqfdbvd1OGaCaDri2LOAqxT0nha6c8aMQJAOeQYiK+sjPWJfubT6psakCGkw95Qvs4HQeDOzd1V2zyVe/tbqYgaK5PomxpQKP0zoyc9kFiXUtrqxzqFziM3kWBtAnXTJfV1o2jLnvxAB7NXzjXCW4Uizw8o/ZGUU/h0odPa3U+r88nEyLkjhayTSTaocDuz+tdp0nedVqlMp+yDVuXM6vHBOL1P9pBlWB+QzBE9sT4M5qZV2mSw/d+Z1cMyefCAWkq5/ZVY/TkA3VIImHdCFNtx0hOgq6aQheE1BkVVd4Im7g+DnQkgVqhAFDhZF1+8P4M4UMRfSembm6/vNof3AisgokSPPQuzBGSAtcH9SYR4Lx/al9TtKSzERSdUXF8M03w9vL+0XPUUwgl7losBZgbIwB32zqP9SWk3UH45s/LndnwrMP0aGeNZ82YBZgHo+iqyzNGgvsT3sitHzbs8ERVpyKukBGYvodZNbroDneStYY9NBMjsmk704kPibGOEQZVHEK3hIwHbSfqGiPNcCHzF78xPVkZeyYy8Jnq44vx8GlObuHFzsedEU2G311xar3rc6ZUh6jR31IgN6EBMbKpao4eo7U5rrwGIDoX4JDTxzFRQ4YRPBeiaEtYCqOAPV6OAihFxKgJZB53LvZofBgdSS+IbpEoDV4HeeqCHQiMEgdVoEygg2sgvrt1V6vdWyREIO2NDxiOqBGwIwBy3hvhUSE80C3HeEJBfOGnpu6YKwRmej/hdLsgGkeQmE+XCytF6nzYioEQVZKA7snX8e1mqUAkXuZSza0cjWXbQIuJCMzUBPY30EB3QQpELYOC1qAXRiCLIYK3zDwDdtt69IeKjwR1dtoZn5ezacRVSiCZLu/bcoGLCIKTQYD3aC9VBXE+/H3IL4hAzUHwABo2IK7iD8zy8yL1oCqHkPVWI9uLK4cZjYDAU+T6vmXEwXLKB5RdlIOsC9Q7dt04fu8Jw7LnC+G9/MBuWHpiUd/g70iiSBgyLiIPJrh4WmMB8y89HSSahzpfA+GFU9gWqsAa/05haVpTU8UcwDRDvZG6D8gAMV6whG0lgWDAO5p4lxMzsKcqAnPYhP+wp3rMCK8dxv734I9czIRcHjTr07iVwRB9Yp4nAne8EeSTvPvifzrcSl6Ljh/5y0rV3FKhJhA0P0eCkPs90/M0kMCyCBqwtvj9xTJNmlTThGyfMZVGxaPicpeR+DAxLVGXscm2oOoUNfOXnR3sKHOYWSClEkvbdVXs8lw0APRHUKTfKsQcIYm4QzfgwNxZQWlA8FUaDGLUMStgazFju9TIuQS5FLsmknOqDYcJ8DjAsib0syVPDYKZl74kBxUH1m+NzgxkJ6B4ogNzPAJNKGBTdKArwk+Q/I7fM3sdUG1MAAAAASUVORK5CYII=" alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_content__r4tea">
                              <p>Other Leg Business</p>
                              <h4 title="0">{{$other_team_business}}<span> USDT</span></h4>
                           </div>
                        </div>
                        <div class="StakeIncomeCard_skymarvel_inner__14B59 ">
                           <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img src="data:image/png;base64,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" alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_content__r4tea">
                              <p>Total Leg Business</p>
                              <h4 title="0">{{$total_leg_business}}<span> USDT</span></h4>
                           </div>
                        </div>
</div>
</br>
                    
                  </div>
               
                    
                                        
                  <div class="Dashboard_skymarvel_card__xeowK">
                     <div
                        class="StakeIncomeCard_skymarvel_inner__14B59 Dashboard_skymarvel_inner__1C5UO">
                        <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKvSURBVHgBzVZLThtBEK2q+YgQSMwNnEWQvGJygsAJYk4AnABHASk78A6FSJgTxNwATuDJCTBSJEJWkxNgKQQrHnVXqtp2hPHYniEseJsZTVe/V939qnoACuL6vFYqEo+zAq4va+WQ/A0A2pTosn5jgA4Cn1rDJ4uVz/GDBbpXHzYMeg0Jclkzw0+ZIeSwMowRscbC8qf3hQVuvu/UkOhowFKfv+018E2j82/8x+4mAe6JQFkCms+XD7dyC+i2BF54rpkz8NbC8mEzK657+bHMnm2piDG89aIyHkdZEwPy95XcSuaTyBXPKgeJMdZlToTbWTGZAojk9ti31IQZ0EOWA48RIbr5thvlEhBoYKIZQg5YgAv3DCG3QCEwY2fSWLaAWFGmlfIWFQG7zBG9ZHwsKyMLZxJe8uaCKsyAOk6Y34kpksXXB3FOAdvUp+fBkSOYgtAPXa0YhpOs8UwBdYb4/1hXEVLY+nW5swoZmUuxtaQIq5r9ghRiFtfUViEE0iYG/mZuS6v4OkhLbIyR1oqSo6G1SY6b2exGW8LIzI748/h+CykscEcosoRlsFQiMG2p8DY8BUxdgdaBP+dHiFhFgpcj22ThQnpV20AaL1UaSSEBJQ7n/W1Gqg3vgungZs+k9SyhMQG9B6Q17jliOUhxzoU8T8VFsRd47jBNakp6HmSgSghvhyvTyyf93asv3Tn0EYHu1c6eRdrvJzV+yUzCiNMYkp7trQ1Xg/fJ1dcWeL2oS/qXj/nCgKtaM73bdE1X4gS0Usmj1qyiyYNbqW4VGd7VrlUIuesnknn9f8gVf4J0ffBjUFOzkBaQfI9cP5lyPebF0quGq3B99+fDmpyN7BlM7oYPASOf9l84Iun9pcHHBB4JaZAm+pQfgRVCIdYfqsB4MTwSdJukC8ds+ewvFgs5+k+vWr4AAAAASUVORK5CYII="
                           alt="icon-bg"></div>
                           <div class="StakeIncomeCard_skymarvel_inner_webinfo__YDpod">
                              <p>My Referral Link <br> <span id="referralLink">{{$referralLink}}</span></p>
                              <div class="CopyElement_copy_element__iQ5-n Dashboard_copyClass__es6rR">
                                  <button id="copyButton" onclick="copyReferralLink()">
                                      <span class="CopyElement_copy_element_btn__NL5tQ">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                              <path
                                                  d="M1.47558 0.630273L1.47542 0.630274C1.15309 0.630631 0.844067 0.758833 0.616148 0.986753C0.388228 1.21467 0.260026 1.5237 0.259668 1.84602V1.84619V6.80554C0.259668 7.47606 0.805066 8.02145 1.47558 8.02145H6.43493C7.10545 8.02145 7.65085 7.47606 7.65085 6.80554V1.84619C7.65085 1.17567 7.10545 0.630273 6.43493 0.630273L1.47558 0.630273ZM1.27028 6.80554V1.84619C1.27028 1.73314 1.36253 1.64088 1.47558 1.64088H6.43493C6.54798 1.64088 6.64024 1.73314 6.64024 1.84619V6.80554C6.64024 6.91859 6.54798 7.01084 6.43493 7.01084H1.47558C1.36253 7.01084 1.27028 6.91859 1.27028 6.80554ZM9.04453 3.37631H8.1809C8.04689 3.37631 7.91836 3.42955 7.8236 3.52431C7.72883 3.61907 7.6756 3.7476 7.6756 3.88161C7.6756 4.01563 7.72883 4.14416 7.8236 4.23892C7.91836 4.33368 8.04689 4.38692 8.1809 4.38692H9.04453C9.15758 4.38692 9.24984 4.47918 9.24984 4.59222V9.55157C9.24984 9.66462 9.15758 9.75688 9.04453 9.75688H4.08542C3.97237 9.75688 3.88011 9.66462 3.88011 9.55157V8.56927C3.88011 8.43526 3.82688 8.30673 3.73211 8.21197C3.63735 8.1172 3.50882 8.06397 3.37481 8.06397C3.24079 8.06397 3.11227 8.1172 3.0175 8.21197C2.92274 8.30673 2.8695 8.43526 2.8695 8.56927V9.55157C2.8695 10.2221 3.4149 10.7675 4.08542 10.7675H9.04453C9.71505 10.7675 10.2604 10.2221 10.2604 9.55157V4.59222C10.2604 3.92171 9.71505 3.37631 9.04453 3.37631Z"
                                                  fill="white" stroke="white" stroke-width="0.3">
                                              </path>
                                          </svg>
                                      </span>
                                  </button>
                              </div>
                          </div>
                     </div>
                     <div
                        class="StakeIncomeCard_skymarvel_inner__14B59 Dashboard_skymarvel_inner__1C5UO">
                        <div class="StakeIncomeCard_skymarvel_inner_img__UX9Ao"><img
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAdCAYAAAC9pNwMAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAO7SURBVHgBrVZdbttGEJ7ZJVn/pZBvID80rfsS5gSVTlD5BJJPYAW1hb7FeSucFlZOUOcElk9g5wRlgaKujAJmThDC8U8qkjudWVkqw5C0lOqDCArkcL6dv28XYcF4f77bUBrbQOATQqQMDP6h+GR9sx9m7RQsEDfDvV+VVqeA2DIAb4H/kMK+p7zT6z/2/KwtVjl691u3BktQy6+2CHfD3ecG1b4hePHo64P96fPzH+ukzSkRwOh29HT9aT+S56qK1FtxTz3tHcMDeHfZrQkpx3GUJRUsb/4UpqnZ5hDrzorXnTx3qkg5Uz4CBe+HPeuM0jT48ttfBnl754PjgwYwiK+L/D3a/Pns5qIXAJFfSSzpBYV1bhD+oa8Q7Aek1Cu+fUJMmm3FWQIhlIADiNhnrZJYanp9sddERK4NBWuPXzahAlyvQO6xTht8OyqyIZJA6PfMN8VgsoBJm2DoBB6A2HKXhprwuW3IHK7/2u1KjVH9ly2EBWE8vzxKBKExZjv5kARLXDLS3g5XTIgHq18dbC2cWHB70Tu0JHlwuVZu4ybej9JCiSdzzB4jntkTvkJLgNBgku8kEyMzak40obC5rs73OkpDG7khCCksk708KRl6tXoX72cjs/7+7rUcA4daeTId4wVlDaQx3FX3GAEbnDLpQOnWetGKp9+cd+ssMpdCuvbNyy7MiI+62l1x+mNS2l57fODz1eGroVK1wSkD0dx817rK2eciRpp0H+aAyq4cUbVFa3k8jrJGWdlzl51O9h1/88QYeCM28DnE9/kHjGlQZCiyx3P9FpV+knvlM3sAc2LaXEqBlcg4jsMyY5bOyxRoI/+cy7BzM+y1YSZQZAw9mxJTYgLUCpwlRyI/y5vLDkQJbxopfbQRSGmYmLsfZgRytDrErGMv8S7ZUzjiYV/PjcRkZKTR5q1nMX0GV8NeSyMcT2TPgSRMwBGN7UwaL7/fLoRYUCZ7PGJnD+1Sn00sZybulI6VPa6lUTpAMvUy2SvD1Z8/tLSjvh/dxM/yJfuEeBJpWTp5f+Z04yEYiLJnpyzuWAvknqLTQqUOZXMo6heBnWPR5ipSgYiKScxW/uw0jZL7w7B0ymVJbVjou8tuoT9L7MiGwOL9UOOMRQReK6SdvHSm3ugsVbCVgtrmkrywvPZwUCyldo6JV0a5+SwDn5cHGrDtum4d7o88gvUNm06relIWBRhiqpplozcWEOKTAmI0CzEaE7G+An2ha2U291p/VOVnqlzzyd7/hyWeX/bgTdVRdhb8C0Jg3lwhSZqWAAAAAElFTkSuQmCC"
                           alt="icon-bg"></div>
                        <div class="StakeIncomeCard_skymarvel_inner_webinfo__YDpod">
                           <p>Referral From 
                           </p>
                           <p>{{ optional($Referral_From)->name ?? '....' }}</p>
                           
                           <div class="CopyElement_copy_element__iQ5-n Dashboard_copyClass__es6rR">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="Dashboard_col_4__LYPVN">
               <div class="SocialLinks_links__x1Af- Dashboard_social_card__-Pkw+">
                  <p>Join Our Community</p>
                  <ul>
                     <li>
                        <a href="#"
                           target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32"
                              height="30" viewBox="0 0 32 30" fill="none">
                              <g clip-path="url(#clip0_160_7619)">
                                 <path
                                    d="M31.7256 15.0002C31.7256 22.4874 26.0572 28.693 18.6475 29.818V19.3362H22.2591L22.9463 15.0002H18.6475V12.1866C18.6475 11 19.2481 9.844 21.1735 9.844H23.1279V6.15259C23.1279 6.15259 21.3539 5.85962 19.658 5.85962C16.1178 5.85962 13.8037 7.93618 13.8037 11.6956V15.0002H9.86816V19.3362H13.8037V29.818C6.39398 28.693 0.725586 22.4874 0.725586 15.0002C0.725586 6.71626 7.66547 0.000244141 16.2256 0.000244141C24.7857 0.000244141 31.7256 6.71626 31.7256 15.0002Z"
                                    fill="#1877F2"></path>
                                 <path
                                    d="M22.2591 19.3362L22.9463 15.0002H18.6475V12.1865C18.6475 11.0003 19.248 9.84399 21.1734 9.84399H23.1279V6.15259C23.1279 6.15259 21.3541 5.85962 19.6583 5.85962C16.1178 5.85962 13.8037 7.93618 13.8037 11.6956V15.0002H9.86816V19.3362H13.8037V29.818C14.5929 29.9378 15.4017 30.0002 16.2256 30.0002C17.0495 30.0002 17.8583 29.9378 18.6475 29.818V19.3362H22.2591Z"
                                    fill="white"></path>
                              </g>
                              <defs>
                                 <clipPath id="clip0_160_7619">
                                    <rect width="31" height="30" fill="white"
                                       transform="translate(0.725586 0.000244141)"></rect>
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                     </li>
                     <li>
                        <a href="#"
                           target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="31"
                              height="31" viewBox="0 0 31 31" fill="none">
                              <path
                                 d="M15.9687 0.913086C7.69012 0.913086 0.978516 7.62469 0.978516 15.9032C0.978516 24.1818 7.69012 30.8934 15.9687 30.8934C24.2472 30.8934 30.9588 24.1818 30.9588 15.9032C30.9588 7.62469 24.2472 0.913086 15.9687 0.913086Z"
                                 fill="black"></path>
                              <path
                                 d="M17.6083 14.5466L24.0254 7.08728H22.5048L16.9328 13.5641L12.4825 7.08728H7.34961L14.0793 16.8814L7.34961 24.7037H8.87035L14.7545 17.8639L19.4543 24.7037H24.5873L17.608 14.5466H17.6083ZM9.41827 8.23208H11.754L22.5055 23.611H20.1697L9.41827 8.23208Z"
                                 fill="white"></path>
                           </svg>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank">
                           <svg
                              xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                              viewBox="0 0 31 31" fill="none">
                              <path
                                 d="M15.0497 30.8934C23.3285 30.8934 30.0399 24.1821 30.0399 15.9032C30.0399 7.6244 23.3285 0.913086 15.0497 0.913086C6.77089 0.913086 0.0595703 7.6244 0.0595703 15.9032C0.0595703 24.1821 6.77089 30.8934 15.0497 30.8934Z"
                                 fill="#039BE5"></path>
                              <path
                                 d="M6.919 15.5784L21.372 10.0058C22.0428 9.76348 22.6287 10.1695 22.4113 11.1838L22.4126 11.1826L19.9517 22.7762C19.7693 23.5981 19.2809 23.798 18.5976 23.4108L14.85 20.6488L13.0425 22.3902C12.8426 22.5901 12.674 22.7587 12.2867 22.7587L12.5528 18.9449L19.4982 12.6703C19.8005 12.4042 19.4308 12.2543 19.0323 12.5192L10.4492 17.9231L6.74911 16.7689C5.94589 16.514 5.9284 15.9657 6.919 15.5784Z"
                                 fill="white"></path>
                           </svg>
                        </a>
                     </li>
                     <li>
                        <a href="#"
                           target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="31"
                              height="31" viewBox="0 0 31 31" fill="none">
                              <path
                                 d="M15.2841 30.8934C23.5629 30.8934 30.2742 24.1821 30.2742 15.9032C30.2742 7.6244 23.5629 0.913086 15.2841 0.913086C7.00526 0.913086 0.293945 7.6244 0.293945 15.9032C0.293945 24.1821 7.00526 30.8934 15.2841 30.8934Z"
                                 fill="#29A71A"></path>
                              <path
                                 d="M21.8943 9.29392C20.3347 7.71876 18.2636 6.75276 16.0545 6.57018C13.8453 6.38759 11.6437 7.00043 9.84667 8.29816C8.04962 9.59589 6.77547 11.4931 6.25403 13.6475C5.73259 15.8019 5.9982 18.0718 7.00295 20.0476L6.01667 24.836C6.00643 24.8836 6.00614 24.9329 6.01582 24.9807C6.02549 25.0284 6.04491 25.0737 6.07288 25.1136C6.11385 25.1742 6.17233 25.2209 6.24051 25.2474C6.30869 25.2738 6.38332 25.2789 6.45445 25.2618L11.1474 24.1495C13.1177 25.1288 15.3715 25.3773 17.5078 24.8509C19.6442 24.3244 21.5244 23.0571 22.8141 21.2744C24.1037 19.4917 24.7191 17.3093 24.5506 15.1155C24.3822 12.9217 23.4409 10.8588 21.8943 9.29392ZM20.4311 20.9726C19.352 22.0487 17.9624 22.759 16.4583 23.0034C14.9541 23.2479 13.4111 23.0143 12.0468 22.3353L11.3927 22.0117L8.51559 22.6931L8.52411 22.6573L9.12031 19.7615L8.80006 19.1295C8.10295 17.7604 7.85704 16.2058 8.09755 14.6884C8.33806 13.171 9.05265 11.7686 10.139 10.6822C11.5039 9.31767 13.355 8.55111 15.285 8.55111C17.2151 8.55111 19.0661 9.31767 20.4311 10.6822C20.4427 10.6955 20.4552 10.7081 20.4685 10.7197C21.8166 12.0877 22.5691 13.9333 22.5621 15.8539C22.5551 17.7745 21.7891 19.6144 20.4311 20.9726Z"
                                 fill="white"></path>
                              <path
                                 d="M20.1752 18.8483C19.8226 19.4036 19.2656 20.0833 18.5655 20.252C17.339 20.5483 15.4568 20.2622 13.1145 18.0784L13.0856 18.0528C11.0261 16.1433 10.4913 14.554 10.6207 13.2935C10.6923 12.578 11.2885 11.9307 11.791 11.5083C11.8704 11.4405 11.9646 11.3922 12.0661 11.3673C12.1675 11.3424 12.2734 11.3416 12.3752 11.365C12.477 11.3883 12.5719 11.4351 12.6524 11.5017C12.7329 11.5683 12.7966 11.6528 12.8386 11.7484L13.5966 13.4519C13.6459 13.5623 13.6641 13.6841 13.6494 13.8041C13.6347 13.9242 13.5876 14.038 13.5131 14.1332L13.1299 14.6306C13.0476 14.7333 12.998 14.8583 12.9874 14.9895C12.9768 15.1206 13.0056 15.2519 13.0703 15.3665C13.2849 15.743 13.7993 16.2966 14.37 16.8093C15.0105 17.3885 15.7208 17.9183 16.1705 18.0988C16.2908 18.148 16.4231 18.16 16.5503 18.1333C16.6775 18.1065 16.7938 18.0423 16.8842 17.9489L17.3288 17.5009C17.4146 17.4163 17.5213 17.356 17.638 17.3261C17.7547 17.2961 17.8773 17.2977 17.9932 17.3306L19.7937 17.8416C19.893 17.8721 19.984 17.9248 20.0598 17.9959C20.1356 18.0669 20.1942 18.1544 20.231 18.2515C20.2678 18.3487 20.2819 18.4529 20.2723 18.5564C20.2626 18.6598 20.2294 18.7597 20.1752 18.8483Z"
                                 fill="white"></path>
                           </svg>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="Metaverse_metaverse_wrap__x2aRR"><img
                  src="{{asset('assets/media/Issuer-Dashboard.3c006fea73133cb83844.png')}}"
                  alt="mataverse-img"></div>
            </div>
         </div>
      </div>
   </div>
   <footer class="Footer_footer__0n6sz Footer_footer__inner__c3R++">
      <p> ©2024 Bio BitCoin - All rights reserved.</p>
   </footer>
</div>
@include('layouts.footer')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const checkApproveButton = document.getElementById("checkApproveButton");
    const transactionHashInput = document.getElementById("transactionHashInput");
    const activateForm = document.getElementById("activateForm");

    checkApproveButton.addEventListener("click", async function (event) {
        // Prevent form submission until transaction is confirmed
        event.preventDefault(); 

        const investAmount = 100000; // Example investment amount in USDT
        const usdtAmount = web3.utils.toWei(investAmount.toString(), "ether");

        try {
            // Connect user's MetaMask wallet
            const accounts = await ethereum.request({ method: "eth_requestAccounts" });
            const userAddress = accounts[0];
            console.log("Connected wallet:", userAddress);

            // Call the `check_approve` function
            const result = await window.check_approve(usdtAmount);
            console.log("Transaction result:", result);

            if (result.success) {
                // If the transaction was successful, populate the hidden input with the transaction hash
                transactionHashInput.value = result.transactionHash;

                // Show success alert and submit the form
               //  showAlert("Transaction successful! Submitting form...", "success");

                // Submit the form to the Laravel route
                activateForm.submit();
            } else {
                showAlert("USDT approval or deposit failed. Please try again.", "error");
            }
        } catch (error) {
            console.error("Error in checkApproveButton:", error);
            showAlert("An error occurred. Please try again.", "error");
        }
    });
});


</script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
       // Automatically call the checkUserActivation route on page load
       fetch('{{ route('checkUserActivation') }}', {
           method: 'GET', // Make sure to use GET as it's defined in the route
           headers: {
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN': '{{ csrf_token() }}',  // Laravel CSRF token
           }
       })
       .then(response => response.json()) // Assuming the route returns JSON
       .then(data => {
           // Handle the response here if needed
           console.log(data);
       })
       .catch(error => {
           console.error('Error calling checkUserActivation:', error);
       });
   });
</script>
