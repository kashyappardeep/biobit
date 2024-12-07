@include('includes.header')
<div class="Authlayout_layout_outer__XO5sX">
    <div class="Authlayout_layout_in__zOGYA">
        <div class="Funds_funds__jvIy+">
            <div class="common-card Withdraw_withdraw__Jnz+w">
                <div class="CommnTable_common_table__LHTkf ReferralList_referral_list_table__MffMF">
                    <div class="table-responsive">
                        <table class="undefined ReferralList_referral_list_table__MffMF table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Wallet Balance</th>
                                    <th>Referral By</th>
                                    <th>Status</th>
                                    <th>Team Business</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $histroy)
                                <tr>
                                    <td>{{ $histroy->name }}</td>
                                    <td>{{ $histroy->activation_balance }}</td>
                                    @if($histroy->referal_by == 0)
                                    <td>Admin</td>  
                                        @else
                                        <td>{{ $histroy->referal_by->name}}</td>
                                        
                                        @endif
                                    @if ($histroy->status == 1)
                                    <td>Not Buy Package</td>
                                    @else
                                    <td>Buy Package</td>
                                    @endif
                                    <td>{{ $histroy->team_business }}</td>
                                    <td>{{ $histroy->user_address }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-wrapper">
                        {{ $user->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="Footer_footer__0n6sz Footer_footer__inner__c3R++">
        <p> ©2024 Bio BitCoin - All rights reserved.</p>
    </footer>
</div>

@include('includes.footer')
