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
                        <h2>My Levels Team
                            <span >
                                <form method="GET" action="{{ route('my_Level') }}">
                                    <select name="level" class="Button_button__w+JtY" id="level" onchange="this.form.submit()">
                                        @for ($i = 1; $i <= 30; $i++)
                                            <option value="{{ $i }}" {{ $i == $selectedLevel ? 'selected' : '' }}>
                                                Level {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </form>
                            </span>
                        </h2>
                        <div class="CommnTable_common_table__LHTkf RewardChart_rewardschatr_table__7n93H">
                            <div class="table-responsive">
                                <table class="RewardChart_rewardschatr_table__7n93H table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Activation</th>
                                            <th>Levels</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->activation == 1 ? 'Activate' : 'InActivate' }}</td>
                                                <td>Level {{ $user->level }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">No users found for this level.</td>
                                            </tr>
                                        @endforelse
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