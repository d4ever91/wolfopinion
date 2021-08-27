<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="Ansonika">
    <title>Wolfinsights</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/fevicon.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/magnific-popup.min.css" rel="stylesheet">
    <link href="css/skins/square/yellow.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
    
    <div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /Loader_form -->

    <header class="fixed-wrapper">
        <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx" href="javascript:void(0);"><span>Menu mobile</span></a>
        <nav class="main_nav">
            <ul class="nav nav-tabs">
                <li><a href="signup.php" class="active show">Sign Up</a></li>
                <li><a href="about.php" >About Us</a></li>
                <li><a href="contact.php" >Contact Us</a></li>
                <li><a href="signup.php" >Login</a></li>
            </ul>
        </nav>
    </header><!-- /header -->

    <div id="main_container" class="visible">
       
        <div id="header_in">
            <div id="logo_in"><a href="/"><img src="img/wolf-opn-main.png" width="100" height="48" data-retina="true" alt="Quote"></a></div>
        </div>

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div>                                               
                        <div class="subheader" id="quote"></div>
                        <div class="row">
                            <aside class="col-xl-3 col-lg-4">
                                <ul class="list_ok">
                                    <li>Double opt-in verification</li>
                                    <li>Profile refresh every three months</li>
                                    <li>Lucrative incentives</li>
                                    <li>0% percent tolerance policy for happy clickers</li>
                                    <li>1000+ active surveys</li>
                                    <li>Adding 100 panelists every hour around the globe</li>
                                    <li>Maxmind security integration</li>
                                    <li>Cash or Coupon rewards</li>
                                    
                                </ul>
                            </aside><!-- /aside -->

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <strong>Progress</strong>
                                        <div id="progressbar"></div>
                                    </div><!-- /top-wizard -->

                                 
                                    <form name="example-1" id="wrapped"  method="POST">
                                        <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
 
                                                <h3 class="main_question"><strong>1/3</strong>Personal details</h3>

                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="firstname" class="required form-control" placeholder="First name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="lastname" class="required form-control" placeholder="Last name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input  type="number" min="0" max="99" name="age" class="required form-control" placeholder="Age">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input id="bemail" type="text" name="business_name" class="required form-control" placeholder="Business Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="phone" type="text"  name="phone_number" class="required form-control" placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="styled-select">
                                                                <select class="required" name="country">
							<option value="0" selected="" disabled="">Country</option>
						   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>										</select>
                                                            </div>
                                                        </div>
                                                    </div><!-- /col-sm-6 -->
                                                </div><!-- /row -->
                                                
                                            </div><!-- /step 1-->
                                            
                                                       <div class="step">
 
                                                <h3 class="main_question"><strong>2/3</strong>Additional Info</h3>

                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input id="linkedln" type="text" name="linked_profile" class="form-control" placeholder="Linkedln Url">
                                                        </div>

                                                    </div><!-- /col-sm-6 -->

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input id="bemail" type="email" name="business_email" class=" form-control" placeholder="Business Email(if any)">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->
                                                </div><!-- /row -->
                                                
                                            </div><!-- /step 1-->


                                            <div class="submit step">

                                                <h3 class="main_question"><strong>3/3</strong>Account Setup</h3>

                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input id="email" type="email" name="email" class="form-control" placeholder="Email">
                                                        </div>
                                                        <!--<div class="form-group">-->
                                                        <!--    <input type="password" name="cpassword" class="required form-control" placeholder="Confirm Password">-->
                                                        <!--</div>-->
                                                    </div><!-- /col-sm-6 -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="password" name="password" class="required form-control" placeholder="Password">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->

                                                </div><!-- /row -->
                                                
                                                <div class="form-group checkbox_questions">
                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                    <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?
                                                    </label>
                                                </div>

                                            </div><!-- /step 4-->

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Backward </button>
                                            <button type="button" name="forward" class="forward">Forward</button>
                                            <button type="submit" name="process" class="submit">Submit</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                        </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                    
                    <div class="tab-pane fade" id="tab_2">
                       <div class="subheader" id="about"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Why Choose Us</h2>
                                <p class="lead">Here at Wolf Insights, we feel that you should not be burdened with these tasks. As a worldwide Market and Data Research company, we provide quality data to help you manage your research requirements without hassle. We deal in collection of coherent online data and sampling via the medium of online market research, using meticulously recruited target audiences. Our superior analytical system is equipped with state-of-the-art algorithms that never fail to deliver results to our clients at lightning speed – allowing them to connect with the target audiences without breaking a sweat.</p>

                                  <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about_info">
                                                <i class="pe-7s-news-paper"></i>
                                                <h4>We strive for data quality</h4>
                                                <p>Wolf Insights skilful team manages the sampling and data collection methods, which remain equally as effective since our inception – and has never proved wrong, hence generating precise and vetted content. With our extensive and vast experience in the field, we not only endow superlative data to our clients but also ensure these have been garnered from all slips and edges of the world making our data utmost reliable and helping the client take competent decisions. Due to excellent services and unique practices, it is no wonder that major global corporations, research firms, and repeating clients continue to work with us, enabling us to be a reliable and first-rate data collection company among other players in the industry.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about_info">
                                                <i class="pe-7s-light"></i>
                                                <h4>Global Research</h4>
                                                <p>We connect you with a user base of over 2 million loyal panelists that are further spread over 15+ countries as per your research needs. Our subject matter experts having studied behavioural patterns of consumers over multiple years, profiling their responses and weeding out redundant information , have developed a robust methodology for obtaining only potent data. With the dynamic nature of the industry, we have kept ourselves abreast in using novel technology to interview our audience in detail using specifics, making the experience a smooth, well-oiled system. Our panelists have been incorporated into our panel following rigorous profiling cycles and can provide valuable insights whether it comes to Consumer Research, Healthcare Research, or Business Research (Business Decision Makers/ITDMs from reputed organizations).</p>
                                            </div>
                                        </div>
                                    </div><!-- /row -->  
                            </div><!-- /col -->

                        </div><!-- /row -->
                    </div><!-- /TAB 2:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                    
                    <div class="tab-pane fade" id="tab_3">
                        
                        <div id="map_contact"></div><!-- /map -->
                        
                        <div id="contact_info">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box_contact">
                                        <i class="pe-7s-map-marker"></i>
                                        <h4>Address</h4>
                                        <p>01-3841 Av Linton, Montréal, QC, Canada H3s-1t3</p>
										<a href="https://www.google.com/maps/dir//11+5th+Ave,+New+York,+NY+10003,+Stati+Uniti/@40.7322935,-73.9981148,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c25990b3af8bb9:0x854ae1d3553155!2m2!1d-73.9959261!2d40.7322935!3e0" class="btn_1" target="_blank">Get directions</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_contact">
                                        <i class="pe-7s-mail-open-file"></i>
                                        <h4>Email and website</h4>
                                       <p>
                                            <strong>Email:</strong> <a href="#0">sales@wolfinsights.com</a><br>
                                            <strong>Website:</strong> <a href="#0">https://wolfinsights.com/</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_contact">
                                        <i class="pe-7s-call"></i>
                                        <h4>Telephone</h4>
                                      <p>
                                        	<strong>Tel:</strong> <a href="#0">+91 (896) 818-2409</a><br>
                                            <strong>Fax:</strong> <a href="#0">+1 (514) 679-1290</a>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- / row-->
                            <hr>
                            <div id="social">
                                <ul>
                                    <li><a target="_blank" href="https://www.facebook.com/Wolf-Insights-105830574611068"><i class="icon-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/wolfinsights"><i class="icon-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/wolfinsights/"><i class="icon-instagram"></i></a></li>
                                    <li><a target="_blank" href="https://in.pinterest.com/Wolf_Insights/"><i class="icon-pinterest"></i></a></li>
                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCQ_TkVh0D9jACHg5LAJpW_g"><i class="icon-youtube"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/company/wolf-insights"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div><!-- /social -->
                        </div>
                    </div><!-- /TAB 3:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

                </div><!-- /tab content -->
            </div><!-- /container-fluid -->
        </div><!-- /wrapper_in -->
    </div><!-- /main_container -->

    <div id="additional_links">
        <ul>
            <li>© 2018 Quote</li>
            <li><a href="#0" class="animated_link">Purchase this template</a></li>
            <li><a href="index_2.html" class="animated_link">Demo Slider</a></li>
			<li><a href="index_3.html" class="animated_link">With UPLOAD</a></li>
            <li><a href="index_4.html" class="animated_link">With Branch</a></li>
            <li><a href="index_5.html" class="animated_link">Full Page View</a></li>
            <li><a href="shortcodes.html" class="animated_link">Shortcodes</a></li>
        </ul>
    </div><!-- /add links -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and conditions</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	<!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts.js"></script>
    <!-- Theme script -->
    <script src="js/functions_no_side_panel.js"></script>
    <!-- Google map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/mapmarker.jquery.js"></script>
    <script src="js/mapmarker_func.jquery.js"></script>
    
</body>

</html>