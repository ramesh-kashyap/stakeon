<style>
    /* Custom Select Dropdown */
.custom-select {
    max-width: 150px;  /* Adjust as per design */
}

/* Custom Search Input */
.custom-search {
    max-width: 250px;  /* Adjust as per design */
    width: 100%;       /* Responsive */
    margin-left: 10px; /* Gap between select and input */
}

/* Responsive adjustments for smaller screens */
@media (max-width: 400px) {
    .custom-search {
        max-width: 100%; /* Full width on small screens */
    }
    .custom-select {
        max-width: 100%; /* Full width on small screens */
    }
}

    </style>
<main id="as-main-settings" class="uk-section-xsmall">
    <div class="uk-container uk-container-expand">

        <figure id="as-transactions-list" class="uk-width-expand@xl uk-first-column">
            <div class="uk-card uk-card-default uk-card-body">
                <header class="uk-heading uk-text-center">
                    <h1 class="uk-heading-line">Level Income</h1>
                </header>
                <form action="{{ route('user.level-income') }}" method="GET" name="opts">
<<<<<<< HEAD
@csrf
=======

>>>>>>> db9cd7b (ruutu)
<!-- Form Grid with Flexbox for better alignment -->
<div class="uk-grid-medium uk-flex-middle uk-flex-start uk-grid" uk-grid="">

    <!-- Form Control 1: Select Dropdown -->
    <div class="uk-form-controls"> 
        <select name="type" class="uk-input form-control" onchange="window.location.href = this.value;">
            <option value="">Select History</option>
            <option value="{{ route('user.DepositHistory') }}">Deposit History</option>
            <option value="{{ route('user.Withdraw-History') }}">Withdraw History</option>
            <option value="{{ route('user.fundHistory') }}">Fund History</option>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da964d8 (ruutu)
=======
>>>>>>> d15f7a2 (new one)
            <option value="{{ route('user.direct-income') }}">Direct Income</option>
=======
            <option value="{{ route('user.level-income') }}">Direct Income</option>
>>>>>>> 1abec5b (ruutu)
=======
            <option value="{{ route('user.direct-income') }}">Direct Income</option>
>>>>>>> 58591ea (new one)
            <option value="{{ route('user.level-income') }}">Level Income</option>
            <option value="{{ route('user.royalty-bonus') }}">Royalty Income</option>
            <option value="{{ route('user.leadership-bonus') }}">Leadership Income</option>
            <option value="{{ route('user.reward-bonus') }}">Reward Income</option>
            <option value="{{ route('user.pool-bonus') }}">Pool Income</option>
            <option value="{{ route('user.package-auto-income') }}">Package Auto Upgrade Income</option>
            <option value="{{ route('user.re-birth-income') }}">Re Birth Income</option>
            <option value="{{ route('user.auto-upgrade-bonus') }}">Auto Upgrade Income</option>






        </select>
    </div>

    <!-- Form Control 2: Limit Dropdown -->
    <div class="uk-form-controls" style="margin-right: 10px;">
        <select name="limit" class="uk-input form-control custom-select">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

    <!-- Search Input with custom width and spacing -->
    <input type="text" 
           placeholder="Search Users"
           name="search" 
           class="uk-input uk-text-emphasis custom-search" 
           value="{{ @$search }}">

    <!-- Buttons aligned with margin-left for larger screens -->
    <div class="uk-form-controls uk-width-auto uk-text-left search-reset-btns">
        <input type="submit" 
               name="submit" 
               class="uk-button uk-button-primary" 
               value="Search" />

        <a href="{{ route('user.level-income') }}" 
           name="reset" 
           class="uk-button uk-button-default" 
           value="Reset">Reset</a>
    </div>

</div>
</form>


=======
            <option value="{{ route('user.level-income') }}">Direct Income</option>
=======
            <option value="{{ route('user.direct-income') }}">Direct Income</option>
>>>>>>> 9df20e3 (new one)
            <option value="{{ route('user.level-income') }}">Level Income</option>
            <option value="{{ route('user.roi-bonus') }}">Roi Income</option>
        </select>
    </div>

    <!-- Form Control 2: Limit Dropdown -->
    <div class="uk-form-controls" style="margin-right: 10px;">
        <select name="limit" class="uk-input form-control custom-select">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

    <!-- Search Input with custom width and spacing -->
    <input type="text" 
           placeholder="Search Users"
           name="search" 
           class="uk-input uk-text-emphasis custom-search" 
           value="{{ @$search }}">

    <!-- Buttons aligned with margin-left for larger screens -->
    <div class="uk-form-controls uk-width-auto uk-text-left search-reset-btns">
        <input type="submit" 
               name="submit" 
               class="uk-button uk-button-primary" 
               value="Search" />

        <a href="{{ route('user.level-income') }}" 
           name="reset" 
           class="uk-button uk-button-default" 
           value="Reset">Reset</a>
    </div>

</div>
</form>


>>>>>>> db9cd7b (ruutu)
                       
                        <div class="uk-overflow-auto uk-margin-bottom">
                                                            <div>
                                    <div class="uk-card uk-card-default uk-margin-top">
                                        <div class="as-card-no-ticket">
										<div class="table-responsive">
                                           <table class="table">
											   <thead>
												  <tr>
													 <th class="table__th">SR</th>
													 <th class="table__th">Package</th>
													 <th class="table__th"> Commission</th>
                                                     <th class="table__th">Date</th>
													 <th class="table__th">From ID</th>
                                                     <th class="table__th"> Description</th>

												  </tr>
											   </thead>
											   <tbody>
                                               <?php if(is_array($level_income) || is_object($level_income)){ ?>

<?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
@foreach ($level_income as $value)
<tr>
                                    <td>
                                        <div ><?= $cnt += 1 ?></div>
                                    </td>

                                    <td>
                                        <div >{{currency()}} {{ $value->amt }}</div>
                                    </td>

                                    

    
                                    <td>
                                        <div >{{currency()}} {{ $value->comm }}</div>
                                    </td>

                                   

                                    <td>
                                        <div >{{ date('D, d M Y', strtotime($value->created_at)) }}</div>
                                    </td>
                                    
                                    <td>
                                        <div >{{ $value->rname }}</div>
                                    </td>
                                    
                                    <td>
                                        <div >{{ $value->remarks }}</div>
                                    </td>

    
                                </tr>
                            @endforeach
    
                            <?php }?>

											     
											   </tbody>
											</table>
                                            <br>
                                            {{ $level_income->withQueryString()->links() }}

											</div>
											
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                        
                        
                    </div>

                </figure>





</div>
</main>
<<<<<<< HEAD

=======
<!-- Custom inline CSS for responsive design -->
<style>
/* Style for buttons */
.search-reset-btns {
    margin-left: 600px; /* Large screens margin */
}

/* Responsive Design: Adjust margin-left on smaller screens */
@media screen and (max-width: 1200px) {
    .search-reset-btns {
        margin-left: 300px; /* Medium screens */
    }
}

@media screen and (max-width: 768px) {
    .search-reset-btns {
        margin-left: 100px; /* Small screens like tablets */
    }
}

@media screen and (max-width: 480px) {
    .search-reset-btns {
        margin-left: 0; /* Mobile screens: no margin */
        text-align: center; /* Center buttons on mobile */
    }
}
</style>
>>>>>>> db9cd7b (ruutu)

