@include('layouts.header')
<div class="Authlayout_layout_outer__XO5sX">
    <div class="Authlayout_layout_in__zOGYA">
       <div class="RewardChart_reward_charts__XGyPw">
          <div class="RewardChart_reward_note__N9c5m">
             <p>Note: <span>Updated value will reflect after next deposit.</span></p>
          </div>
          <div>
             <div class="row">
                <div class="col-md-6">
                   <div class="RewardChart_table_in__yDMWj">
                      <h2>Level Income</h2>
                      <div class="CommnTable_common_table__LHTkf RewardChart_rewardschatr_table__7n93H">
                         <div class="table-responsive">
                            <table class="undefined RewardChart_rewardschatr_table__7n93H table">
                               <thead>
                                  <tr>
                                     <th>Level</th>
                                     <th>%</th>
                                     <th>Need to do <br>Direct
                                       referals</th>
                                  </tr>
                               </thead>
                               <tbody>
                                 @foreach ($Level as $Level )
                                  <tr>
                                     <td>{{$Level->level}}</td>
                                     <td>
                                        <p title="{{$Level->L_P}}">{{$Level->L_P}}</p>
                                     </td>
                                     <td>{{$Level->direct_referals}}</td>
                                  </tr>
                                  @endforeach
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="RewardChart_table_in__yDMWj">
                      <h2>Referral Income</h2>
                      <div class="CommnTable_common_table__LHTkf RewardChart_rewardschatr_table__7n93H">
                         <div class="table-responsive">
                            <table class="undefined RewardChart_rewardschatr_table__7n93H table">
                               <thead>
                                  <tr>
                                     <th>Referral</th>
                                     <th>%</th>
                                     <th>Updated On</th>
                                  </tr>
                               </thead>
                               <tbody>
                                 @foreach ($Referral as $Referral )
                                 <tr>
                                    <td>{{$Referral->R_L}}</td>
                                    <td>
                                       <p title="5">{{$Referral->R_P}}</p>
                                    </td>
                                    <td>{{$Referral->created_at}}</td>
                                 </tr>
                                 @endforeach
                                 
                                 
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <footer class="Footer_footer__0n6sz Footer_footer__inner__c3R++">
       <p> ©2024 Bio BitCoin - All rights reserved.</p>
    </footer>
 </div>

@include('layouts.footer')