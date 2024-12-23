@include('layouts.header')
<div class="Authlayout_layout_outer__XO5sX">
    <div class="Authlayout_layout_in__zOGYA">
       <div class="ReferralList_referral_list__hAWyp">
          <div class="ReferralList_transaction_heading__YK1Cu">
             <h4 class="ReferralList_title__FZt1M">Transaction History</h4>
             
          </div>
          <div class="CommnTable_common_table__LHTkf ReferralList_referral_list_table__MffMF">
             <div class="table-responsive">
                <table class="undefined ReferralList_referral_list_table__MffMF table">
                   <thead>
                      <tr>
                         {{-- <th>Transaction #</th> --}}
                         <th>Date</th>
                         <th>Amount</th>
                         <th>Type</th>
                      </tr>
                   </thead>
                   <tbody>
                     @if (!empty($History) && $History->isNotEmpty())
                     @foreach ($History as $History)
                     <tr>
                        {{-- <td>7464376</td> --}}
                        <td>{{$History->created_at}}</td>
                        <td>{{$History->amount}}</td>
                        @if ($History->type ==1 )
                        <td>Withdraw</td>
                        @elseif ($History->type ==2)
                        <td>Referred </td>
                        @elseif ($History->type ==3)
                        <td>reward </td>
                        @elseif ($History->type ==4)
                        <td>Daily ROI </td>
                        @elseif ($History->type ==5)
                        <td>Level Income </td>
                        @else
                        <td>Activation id </td>
                        @endif
                        
                     </tr>

                     @endforeach
                      @else 
                     <tr class="CommnTable_no_record__Ty6b3">
                        <td colspan="4">
                           <div class="CommnTable_no_record_box__FXr7l">
                              <h4>No Record Found</h4>
                           </div>
                        </td>
                     </tr>
                     @endif
                      
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
    <footer class="Footer_footer__0n6sz Footer_footer__inner__c3R++">
       <p> ©2024 SKY MARVEL - All rights reserved.</p>
    </footer>
 </div>

@include('layouts.footer')