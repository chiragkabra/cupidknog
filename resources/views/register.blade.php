<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    @media (min-width: 1002px) {
  .h-custom {
    height: 100vh !important;
  }
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}

.gradient-custom-2 {
  /* fallback for old browsers */
  background: #a1c4fd;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
  background-color: #4835d4;
}
@media (min-width: 992px) {
  .card-registration-2 .bg-indigo {
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
@media (max-width: 991px) {
  .card-registration-2 .bg-indigo {
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
</style>
    </head>
    <body>

        <section class="h-100 h-custom gradient-custom-2">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <form method="post" action="{{route('register.store')}}">
                            @csrf
                      <div class="row g-0">
                        <div class="col-lg-6">
                          <div class="p-5">
                            <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>



                            <div class="row">
                              <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                  <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="name" />
                                  <label class="form-label" for="form3Examplev2">First name</label>
                                </div>

                              </div>
                              <div class="col-md-6 mb-4 pb-2">


                              </div>
                            </div>



                            <div class="mb-4 pb-2">
                              <div class="form-outline">
                                <input type="text" id="form3Examplev4" class="form-control form-control-lg"  name="email"/>
                                <label class="form-label" for="form3Examplev4">Email</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                <div class="form-outline">
                                  <input type="text" id="form3Examplev5" class="form-control form-control-lg" name="password" />
                                  <label class="form-label" for="form3Examplev5">password</label>
                                </div>


                              </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                  <div class="form-outline">
                                        <input type='date' class="form-control form-control-lg"  name="dob"/>

                                    <label class="form-label" for="form3Examplev2">Date of Birth</label>
                                  </div>

                                </div>

                              </div>

                          </div>
                        </div>
                        <div class="col-lg-6 bg-indigo text-white">
                          <div class="p-5">
                            <h3 class="fw-normal mb-5">Basic Details</h3>

                            <div class="mb-4 pb-2">
                              <div class="form-outline form-white">
                                <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="income" />
                                <label class="form-label" for="form3Examplea2">Annual Income</label>
                              </div>
                            </div>

                            <div class="mb-4 pb-2">
                              <div class="form-outline form-white">
                               <select  class="form-control form-control-lg" name="occupation">
                                <option value="private_job">private job</option>
                                <option value="gov_job">goverment job</option>
                                <option value="business_job">business job</option>
                                </select>
                               <label class="form-label" for="form3Examplea4">Occupation</label>
                              </div>
                            </div>

                            <div class="mb-4 pb-2">
                                <div class="form-outline form-white">
                                 <select  class="form-control form-control-lg" name="family">
                                    <option value="j_family">Joint Family</option>
                                    <option value="n_family">Nuclear Family</option>

                                  </select>
                                 <label class="form-label" for="form3Examplea4">Family type</label>
                                </div>
                              </div>
                            <div class="row">
                              <div class="col-md-5 mb-4 pb-2">

                                <div class="form-outline form-white">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="gender" value="male">Male
                                        </label>
                                      </div>
                                </div>

                              </div>
                              <div class="col-md-7 mb-4 pb-2">

                                <div class="form-outline form-white">

                                      <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="gender" value="female">Female
                                        </label>
                                      </div>
                                </div>

                              </div>
                            </div>

                            <div class="mb-4 pb-2">
                              <div class="form-outline form-white">
                                <select  class="form-control form-control-lg" name="manglik">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>

                                 </select>
                                <label class="form-label" for="form3Examplea4">Manglik</label>
                              </div>
                            </div>

                            <h3 class="fw-normal mb-5">Partner Preference</h3>
                            <div class="row">
                              <div class="col-md-5 mb-4 pb-2">

                                <div class="form-outline form-white">
                                    <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="p_income" />
                                    <label class="form-label" for="form3Examplea2">Annual Income</label>
                                  </div>

                              </div>
                              <div class="col-md-7 mb-4 pb-2">

                                <div class="form-outline form-white">
                                    <select  class="form-control form-control-lg" name="p_manglik">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        <option value="both">Both</option>

                                     </select>
                                    <label class="form-label" for="form3Examplea4">Manglik</label>
                                </div>

                              </div>
                            </div>

                            <div class="mb-4">
                              <div class="form-outline form-white">
                                <select  class="form-control form-control-lg" name="p_occupation">
                                    <option value="private_job">private job</option>
                                    <option value="gov_job">goverment job</option>
                                    <option value="business_job">business job</option>
                                 </select>
                                <label class="form-label" for="form3Examplea4">Occupation</label>
                              </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-outline form-white">
                                    <select  class="form-control form-control-lg" name="p_family">
                                        <option value="j_family">Joint Family</option>
                                        <option value="n_family">Nuclear Family</option>

                                     </select>
                                    <label class="form-label" for="form3Examplea4">Family type</label>
                                </div>
                              </div>


                            {{-- <button type="button" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button> --}}
                            <input type="submit" value="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">

                          </div>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>

</html>
