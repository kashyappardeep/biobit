@include('layouts.header')

<div class="Authlayout_layout_outer__XO5sX">
    <div class="Authlayout_layout_in__zOGYA">
       <div class="Funds_funds__jvIy+">
         
          <div class="common-card  Withdraw_withdraw__Jnz+w">
             <div class="CommnTable_common_table__LHTkf ReferralList_referral_list_table__MffMF">
                <div class="table-responsive">
                   <table class="undefined ReferralList_referral_list_table__MffMF table">
                      <thead>
                         <tr>
                            
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Tx Hash</th>
                            <th>Type</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
 
                         @foreach ($histroy as $histroy)
                         <tr>
                           
                            <td>{{$histroy->created_at}}</td>
                            <td>{{$histroy->amount}}</td>
                            <td>{{$histroy->tx_hash}}</td>
                           <td>{{$histroy->package->name}}</td>
                            @if ($histroy->status == 1)
 
                            <td> Pending</td>
                              @elseif ($histroy->status == 2) 
                              <td> Complete</td>
                              @else
                              <td>Reject</td>
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
    <footer class="Footer_footer__0n6sz Footer_footer__inner__c3R++">
       <p> ©2024 Bio BitCoin - All rights reserved.</p>
    </footer>
 </div>

@include('layouts.footer')