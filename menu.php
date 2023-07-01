<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .nav ul li:hover {
      color: #0d6efd;

      background-color: #0d6efd;
      border-radius: 5px;
      transition-duration: 1s;
    }

    header .nav-link:hover {
      color: white !important;
    }

    .album .container h3:hover {
      color: black !important;
      cursor: pointer !important;
      transition-duration: 1s;
    }

    .testimonial-card .card-up {
      height: 120px;
      overflow: hidden;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .testimonial-card .avatar {
      width: 110px;
      margin-top: -60px;
      overflow: hidden;
      border: 3px solid #fff;
      border-radius: 50%;
    }

    .map-container-2 {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container-2 iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    span:hover {
      color: #0d6efd;
    }

    .nav .col-md-2 button:hover {
      color: #fff;
    }

    .sig {
      text-decoration: none;
      color: #fff;
    }

    .sig:hover {
      color: #fff;
    }

    .log {
      text-decoration: none;
      color: #0d6efd;
    }

    .log:hover {
      color: white;
    }
  </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
<section class="nav">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom w-100>
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h1 style="color: #0d6efd;">Cars</h1>
        </a>

        <ul class="nav col-12 col-md-auto mb-3  justify-content-center mb-md-0 ">
          <li><a href="#cfs" class="nav-link px-2  link-dark">&nbsp;&nbsp;&nbsp; Cars for Sale&nbsp;&nbsp;</a></li>
          <li><a href="#rev" class="nav-link px-2 link-dark">&nbsp;Research & Reviews&nbsp;</a></li>
          <li><a href="#sr" class="nav-link px-2 link-dark">&nbsp;&nbsp;Service & Repair&nbsp;&nbsp;</a></li>
          <li><a href="#abot" class="nav-link px-2 link-dark">&nbsp;&nbsp;About&nbsp;&nbsp;</a></li>
        </ul>

        <div class="col-md-2 text-end">
          <button type="button" class="btn btn-outline-primary " onclick="location.href = 'login.php';">Login</button>
          <button type="button" class="btn btn-primary m-2" onclick="location.href = 'signup.php';">Sign-up</button>

        </div>
      </header>
    </div>
  </section>

    <div class="container mt-5">
        <h1>New and used vehicles for sale</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <input type="email" placeholder="email" class="form-control"><br>
                <input type="submit" value="Subscribe" class="btn btn-outline-primary"><br><br>
                <h4>Basic</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>New/Used</option>
                            <option value="1">New & Used</option>
                            <option value="1">Certified</option>
                            <option value="2">New & Certified</option>
                            <option value="3">Used</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Body Style</option>
                            <option value="cargo_van">Cargo van</option>
                            <option value="convertible">Convertible</option>
                            <option value="coupe">Coupe</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="minivan">Minivan</option>
                            <option value="passenger_van">Passenger van</option>
                            <option value="pickup_truck">Pickup truck</option>
                            <option value="suv">SUV</option>
                            <option value="sedan">Sedan</option>
                            <option value="wagon">Wagon</option>
                        </select>
                    </div><br><br>
                    <div class="col-lg-6"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="12000">$12,000</option>
                            <option value="14000">$14,000</option>
                            <option value="16000">$16,000</option>
                            <option value="18000">$18,000</option>
                            <option value="20000">$20,000</option>
                            <option value="25000">$25,000</option>
                            <option value="30000">$30,000</option>
                            <option value="35000">$35,000</option>
                            <option value="40000">$40,000</option>
                            <option value="45000">$45,000</option>
                            <option value="50000">$50,000</option>
                            <option value="60000">$60,000</option>
                            <option value="70000">$70,000</option>
                            <option value="80000">$80,000</option>
                            <option value="90000">$90,000</option>
                            <option value="100000">$100,000</option>
                        </select></div>
                    <div class="col-lg-6"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="10">10 miles</option>
                            <option selected="" value="20">20 miles</option>
                            <option value="30">30 miles</option>
                            <option value="40">40 miles</option>
                            <option value="50">50 miles</option>
                            <option value="75">75 miles</option>
                            <option value="100">100 miles</option>
                            <option value="150">150 miles</option>
                            <option value="200">200 miles</option>
                            <option value="250">250 miles</option>
                            <option value="500">500 miles</option>
                            <option value="all">All miles from</option>
                        </select></div><br><br><br>
                    <h4>Filter</h4>
                    <div class="col-lg-6"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="10">10 miles</option>
                            <option selected="" value="">Oldest</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                        </select></div>
                    <div class="col-lg-6"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="10">10 miles</option>
                            <option selected="" value="">Newest</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                        </select></div><br><br>
                    <div class="col-lg-6"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="10">10 miles</option>
                            <option selected="" value="">Lowest</option>
                            <option value="2000">$2,000</option>
                            <option value="4000">$4,000</option>
                            <option value="6000">$6,000</option>
                            <option value="8000">$8,000</option>
                            <option value="10000">$10,000</option>
                            <option value="15000">$15,000</option>
                            <option value="20000">$20,000</option>
                            <option value="25000">$25,000</option>
                            <option value="30000">$30,000</option>
                            <option value="35000">$35,000</option>
                            <option value="40000">$40,000</option>
                            <option value="45000">$45,000</option>
                            <option value="50000">$50,000</option>
                            <option value="60000">$60,000</option>
                            <option value="70000">$70,000</option>
                            <option value="80000">$80,000</option>
                            <option value="90000">$90,000</option>
                            <option value="100000">$100,000</option>
                            <option value="125000">$125,000</option>
                            <option value="150000">$150,000</option>
                            <option value="175000">$175,000</option>
                        </select></div>
                    <div class="col-lg-6"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="10">10 miles</option>
                            <option selected="" value="">Highest</option>
                            <option value="2000">$2,000</option>
                            <option value="4000">$4,000</option>
                            <option value="6000">$6,000</option>
                            <option value="8000">$8,000</option>
                            <option value="10000">$10,000</option>
                            <option value="15000">$15,000</option>
                            <option value="20000">$20,000</option>
                            <option value="25000">$25,000</option>
                            <option value="30000">$30,000</option>
                            <option value="35000">$35,000</option>
                            <option value="40000">$40,000</option>
                            <option value="45000">$45,000</option>
                            <option value="50000">$50,000</option>
                            <option value="60000">$60,000</option>
                            <option value="70000">$70,000</option>
                            <option value="80000">$80,000</option>
                            <option value="90000">$90,000</option>
                            <option value="100000">$100,000</option>
                            <option value="125000">$125,000</option>
                            <option value="150000">$150,000</option>
                            <option value="175000">$175,000</option>
                        </select></div><br><br><br>
                    <div class="col-lg-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Great Deal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Good Deal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Fair Deal
                            </label>
                        </div><br>
                    </div>
                    <div class="col-lg-12"><select class="form-select" aria-label="Default select example">
                            <option value="">No max price</option>
                            <option value="10">10 miles</option>
                            <option selected="" value="">Any mileage</option>
                            <option value="10000">10,000 or less (787376)</option>
                            <option value="20000">20,000 or less (946267)</option>
                            <option value="30000">30,000 or less (1129061)</option>
                            <option value="40000">40,000 or less (1308620)</option>
                            <option value="50000">50,000 or less (1474494)</option>
                            <option value="60000">60,000 or less (1608236)</option>
                            <option value="70000">70,000 or less (1739449)</option>
                            <option value="80000">80,000 or less (1845086)</option>
                            <option value="90000">90,000 or less (1932807)</option>
                            <option value="100000">100,000 or less (2018124)</option>
                            <option value="150000">150,000 or less (2176354)</option>
                            <option value="200000">200,000 or less (2213165)</option>
                            <option value="250000">250,000 or less (2221892)</option>
                        </select><br>
                        <input type="submit" class="btn btn-outline-secondary">
                    </div>

                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="https://platform.cstatic-images.com/xlarge/in/v2/dbdf96af-ffea-596c-a551-7b49091e36c0/02a83265-896e-4031-ae38-6c8b0226a1fa/bHuKhZAvUODaki-xZTbWPJbgzvM.jpg" class="img-fluid " width="200px" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <h6>2023 Mercedes-Benz EQS 580</h6>
                        <p>$153,730 &nbsp;<span class="text-muted">MSRP $128,730</span></p>
                        <P>Mercedes-Benz</P>
                        <a href="#" class="text-decoration-none">Visit on </a>&nbsp;&nbsp;
                        <button class="btn btn-outline-dark">Chech Available</button>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="https://platform.cstatic-images.com/xlarge/in/v2/3940887f-dfdc-5203-a508-960991780e2f/3a0b4924-e40a-47f0-a8d5-046c4ff2a280/czSvnV4L-ZJNYs-67NZekzL9yGs.jpg" class="img-fluid " width="200px" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <h6>2023 Mercedes-Benz EQS 580</h6>
                        <p>$153,730 &nbsp;<span class="text-muted">MSRP $128,730</span></p>
                        <P>Mercedes-Benz</P>
                        <a href="#" class="text-decoration-none">Visit on </a>&nbsp;&nbsp;
                        <button class="btn btn-outline-dark">Chech Available</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="https://platform.cstatic-images.com/xlarge/in/v2/87bb478a-e0c3-55b9-b475-2a76c01fefe9/ec355265-db73-417f-8503-38ccf7f8b8b2/iuRoziAli1GxEQMlIEHabB4N_sQ.jpg" class="img-fluid " width="200px" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <h6>2023 Mercedes-Benz EQS 580</h6>
                        <p>$153,730 &nbsp;<span class="text-muted">MSRP $128,730</span></p>
                        <P>Mercedes-Benz</P>
                        <a href="#" class="text-decoration-none">Visit on </a>&nbsp;&nbsp;
                        <button class="btn btn-outline-dark">Chech Available</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="https://platform.cstatic-images.com/xlarge/in/v2/5287457a-feec-5d21-a97a-b860e07ebee7/652fb2a7-8022-465b-8c92-77f2ab9c5369/6rUGMllIRWx42T3axR6kTa198ZI.jpg" class="img-fluid " width="200px" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <h6>2023 Mercedes-Benz EQS 580</h6>
                        <p>$153,730 &nbsp;<span class="text-muted">MSRP $128,730</span></p>
                        <P>Mercedes-Benz</P>
                        <a href="#" class="text-decoration-none">Visit on </a>&nbsp;&nbsp;
                        <button class="btn btn-outline-dark">Chech Available</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="https://platform.cstatic-images.com/xlarge/in/v2/92336a96-995b-5050-ab49-67c37411bff8/fa8d56ea-bb5c-4d12-bf04-8072ea685528/7Nkr_mjcrcf-c7m5pJAYNE-gTAM.jpg" class="img-fluid " width="200px" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <h6>2023 Mercedes-Benz EQS 580</h6>
                        <p>$153,730 &nbsp;<span class="text-muted">MSRP $128,730</span></p>
                        <P>Mercedes-Benz</P>
                        <a href="#" class="text-decoration-none">Visit on </a>&nbsp;&nbsp;
                        <button class="btn btn-outline-dark">Chech Available</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>