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
                    <h1 class="uk-heading-line">Level Team</h1>
                </header>


           

<form  action="{{ route('user.level-team') }}" method="GET" name="opts">

<!-- Form Grid with Flexbox for better alignment -->
<div class="uk-grid-medium uk-flex-middle uk-flex-start uk-grid" uk-grid="">

    <!-- Form Control 1: Select Dropdown -->
    <div class="uk-form-controls"> 
        <select name="type" class="uk-input form-control" onchange="window.location.href = this.value;">
            <option value="">Select  History</option>
            <option value="{{ route('user.level-team') }}">Level Team</option>
            <option value="{{ route('user.referral-team') }}">Direct Team</option>
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

        <a href="{{ route('user.level-team') }}" 
           name="reset" 
           class="uk-button uk-button-default" 
           value="Reset">Reset</a>
    </div>

</div>
</form>
                       
                        <div class="uk-overflow-auto uk-margin-bottom">
                                                            <div>
                                    <div class="uk-card uk-card-default uk-margin-top">
                                        <div class="as-card-no-ticket">
										<div class="table-responsive">
                                           <table class="table">
											   <thead>
												  <tr>
													 <th class="table__th">Name</th>
													 <th class="table__th">User ID</th>
													 <th class="table__th">Email</th>
                                                     <th class="table__th">Joining Date</th>
													 <th class="table__th">Level</th>
                                                     <th class="table__th">Sponsor ID</th>
                                                     <th class="table__th">Status</th>

												  </tr>
											   </thead>
											   <tbody>
                                               <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

<?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
@foreach ($direct_team as $value)
<tr>
                                    <td>
                                        <div >{{ $value->name }}</div>
                                    </td>

                                    <td>
                                        <div > {{ $value->username }}</div>
                                    </td>

                                    

    
                                    <td>
                                        <div >{{ $value->email }}</div>
                                    </td>

                                    <td>
                                        <div >{{ date('D, d M Y', strtotime($value->created_at)) }}</div>
                                    </td>

                                    <td>
                                        <div >{{$value->level - Auth::user()->level}}</div>
                                    </td>
                                    <td>
                                        <div >{{$value->sponsor_detail->username}}</div>
                                    </td>
                                    <td>
                                        <div >{{ $value->active_status }}</div>
                                    </td>



    
                                </tr>
                            @endforeach
    
                            <?php }?>

											     
											   </tbody>
											</table>
                                            <br>
                                            {{ $direct_team->withQueryString()->links() }}

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
