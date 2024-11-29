@include('layouts.header')
<div class="Authlayout_layout_outer__XO5sX">
    <div class="Authlayout_layout_in__zOGYA">
       <div class="ReferralList_referral_list__hAWyp">
          <div class="ReferralList_transaction_heading__YK1Cu">
             <h4 class="ReferralList_title__FZt1M">Binary Income History</h4>
             
          </div>
          <div class="CommnTable_common_table__LHTkf ReferralList_referral_list_table__MffMF">
             <div class="table-responsive">
                <table class="undefined ReferralList_referral_list_table__MffMF table">
                   <thead>
                      <tr>
                         {{-- <th>Transaction #</th> --}}
                         <th>Date</th>
                         <th>Amount</th>
                      </tr>
                   </thead>
                   <tbody>
                     @if (!empty($History) && $History->isNotEmpty())
                     @foreach ($History as $History)
                     <tr>
                        {{-- <td>7464376</td> --}}
                        <td>{{$History->created_at}}</td>
                        <td>{{$History->amount}}</td>
                     
                        
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
       <p> ©2024 Bio BitCoin - All rights reserved.</p>
    </footer>
 </div>

@include('layouts.footer')