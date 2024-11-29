@include('layouts.header')
<div class="Authlayout_layout_outer__XO5sX">
    <div class="Authlayout_layout_in__zOGYA">
       <div class="RewardChart_reward_charts__XGyPw">
          <div class="RewardChart_reward_note__N9c5m">
             {{-- <p>Note: <span>Updated value will reflect</span></p> --}}
          </div>
          <div>
             <div class="row">
               
                <div class="col-md-12">
                   <div class="RewardChart_table_in__yDMWj">
                      <h2>Referral Income</h2>
                      <div class="CommnTable_common_table__LHTkf RewardChart_rewardschatr_table__7n93H">
                         <div class="table-responsive">
                            <table class="undefined RewardChart_rewardschatr_table__7n93H table">
                               <thead>
                                  <tr>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Activation</th>
                                  </tr>
                               </thead>
                               <tbody>
                                 @foreach ($Referral as $Referral )
                                 <tr>
                                    <td>{{$Referral->name}}</td>
                                    <td>
                                       <p>{{$Referral->email}}</p>
                                    </td>
                                    @if ($Referral->activation == 1)
                                    <td>Activate</td> 
                                    @else
                                    <td>InActivate</td>
                                    @endif
                                 
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