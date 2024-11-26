@include('layouts.header')
<div class="Authlayout_layout_outer__XO5sX">
   <div class="Authlayout_layout_in__zOGYA">
      <div class="Funds_funds__jvIy+">
         <div class="Funds_funds_top__KCZVO">
            <div class="Funds_funds_top_left__NN-wM">
               <div class="common-card Deposit_deposit__0jKxW">
                  <h4>Deposit</h4>
              
                  <!-- Package Buttons -->
                  <div class="slick-slider Deposit_deposit__slider__-I3QY slick-initialized" dir="ltr">
                      <div class="slick-list">
                          <div class="slick-track" style="width: 1392px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                              <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 348px;">
                                  <div>
                                      @foreach ($Package as $package)
                                      <div tabindex="-1" style="width: 33.3333%; display: inline-block;">
                                          <button type="button" class="Deposit_deposit__btn__-FB4l package-btn" data-days="{{ $package->days }}" data-id="{{ $package->id }}">
                                              {{ $package->days }} Days
                                          </button>
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              
                  <!-- Selected Package Info -->
                  <div id="selectedPackageInfo" style="margin-top: 20px; text-align: center; color: #fff; font-size: 16px; font-weight: bold;">
                      <!-- Selected package details will appear here -->
                  </div>
               <script src="{{asset('assets/js/index.js')}}" type="module"></script>
                  <!-- Form -->
                 
                  <form id="depositForm" action="{{ route('investments') }}" method="POST">
                     @csrf
                     <input type="hidden" name="package_id" id="selectedPackageId" value="">
                     <div style="margin-top: 20px; text-align: center;">
                         <input type="number" name="invest_amount" id="investAmount" placeholder="Enter Amount" style="padding: 10px; width: 80%; border: 1px solid #ddd; border-radius: 5px;" disabled>
                     </div>
                     <div style="margin-top: 20px; text-align: center;">
                        {{-- <button class="Button_button__w+JtY Deposit_deposit__actionBtn__b+SLn"
                        type="button" id="checkApproveButton">Approve</button> --}}
                        @if ($user->activation == 1)
                        <button class="Button_button__w+JtY Deposit_deposit__actionBtn__b+SLn"
                        id="depositButton"  type="button" disabled>
                        Deposit </button> 
                        @else
                        <button class="Button_button__w+JtY"
                          type="button" disabled>
                        First Activate Id </button> 
                        @endif
                        
                       


                          <input type="hidden" id="transactionHashInput" name="transactionHash" value="">
                        </div>
                 </form>
              </div>
              
              
              
            </div>
            <div class="Funds_funds_top_mid__06+Fj">
               <div class="common-card ReferAndEarn_refer__4cPL1">
                  <div class="ReferAndEarn_refer__img__JlNYR">
                     <img src="{{asset('assets/images/refer_earn_img.d404ee58b53827f2a9e9.png')}}" alt="refer-earn-img"></div>
                  <div class="ReferAndEarn_refer__content__QMRYX">
                     <h4>Refer and Earn</h4>
                     <p id="referralLink">{{$referralLink}}</p>
                     <div class="CopyElement_copy_element__iQ5-n ">
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
            </div>
            <div class="Funds_funds_nftImg__35Txy">
               <img src="{{asset('assets/images/nft_img.5a0e9d57142e511612b1a226192dd6d1.svg')}}" alt="nft-img"></div>
         </div>
         <div class="common-card  Withdraw_withdraw__Jnz+w">
            <div class="CommnTable_common_table__LHTkf ReferralList_referral_list_table__MffMF">
               <div class="table-responsive">
                  <table class="undefined ReferralList_referral_list_table__MffMF table">
                     <thead>
                        <tr>
                           
                           <th>Date</th>
                           <th>Amount</th>
                           <th>Type</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>

                        @foreach ($histroy as $histroy)
                        <tr>
                          
                           <td>{{$histroy->created_at}}</td>
                           <td>{{$histroy->amount}}</td>
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
      <p> ©2024 SKY MARVEL - All rights reserved.</p>
   </footer>
</div>
@include('layouts.footer')


   <script>
 
 document.addEventListener("DOMContentLoaded", function () {
    const packageButtons = document.querySelectorAll(".package-btn");
    const investInput = document.getElementById("investAmount");
    const depositButton = document.getElementById("depositButton");
    const selectedPackageInfo = document.getElementById("selectedPackageInfo");
    const selectedPackageIdInput = document.getElementById("selectedPackageId");
    const transactionHashInput = document.getElementById("transactionHash");

    let selectedPackage = null;

    // Handle package selection
    packageButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const packageDays = this.getAttribute("data-days");
            const packageId = this.getAttribute("data-id");

            // Update selected package
            selectedPackage = { id: packageId, days: packageDays };
            selectedPackageInfo.innerHTML = `You selected the <strong>${packageDays} Days</strong> package.`;
            selectedPackageIdInput.value = packageId;

            // Enable input and reset its value
            investInput.disabled = false;
            investInput.value = "";

            // Disable the deposit button until a valid amount is entered
            depositButton.disabled = true;
            investInput.focus();
        });
    });

    // Enable "Deposit" button when a valid amount is entered
    investInput.addEventListener("input", function () {
        const investAmount = parseFloat(investInput.value);
        if (investAmount > 50) {
            depositButton.disabled = false;
        } else {
            depositButton.disabled = true;
        }
    });
    
    // Handle "Deposit" button click

    depositButton.addEventListener("click", async function () {
        if (!selectedPackage) {
            alert("Please select a package before proceeding.");
            return;
        }

        const investAmount = parseFloat(investInput.value);
        if (!investAmount || investAmount <= 50) {
            alert("Please enter a valid amount greater than 50.");
            return;
        }

        // Interact with Metamask and smart contract
        const usdtAmount = web3.utils.toWei(investAmount.toString(), "ether");
        const accounts = await ethereum.request({ method: "eth_requestAccounts" });
            const userAddress = accounts[0];
       
         try {
        const accounts = await ethereum.request({ method: "eth_requestAccounts" });
     
       const transaction = await window.invest(usdtAmount);


       console.log("Transaction Response:", transaction);
       if (transaction.success) {
               //  console.log('Transaction Successful:', transaction.transactionHash);
                const transactionHashInput = document.getElementById("transactionHashInput");
      //   console.log(' transactionHashInput:', transactionHashInput);
        transactionHashInput.value = transaction.transactionHash;
               //  alert('Investment Successful! Transaction Hash: ' + transaction.transactionHash);
            } else {
                console.error('Transaction Failed:', transaction.message || transaction.error);
                showAlert('Transaction Failed: ' + (transaction.message || 'Unknown error.'));
            }
        // If successful, save the transaction hash and submit the form
        // Ensure transaction.hash is set in invest()

        document.getElementById("depositForm").submit();
    } catch (error) {
        console.error("Transaction failed:", error);
        showAlert("Transaction failed. Please try again.");
    }

    });
    
});
</script>




   