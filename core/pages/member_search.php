<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MATURE（４０代からの恋活マッチング）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
    <link rel="stylesheet" href="core/pages/css/member_responsible.css">
    <link rel="stylesheet" href="core/pages/css/luxbar.min.css">
    <link rel="stylesheet" href="core/pages/css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,100' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
</head>
<body>
   
    <main>
        
<?php 
$id = (int) $_SESSION['user_id'];
$users = refinement_get($id, $mysqli);
?>
        

<?php foreach ($users as $user) { ?>

<form action="index.php?page=member_top" method="post" style="margin-bottom:70px;">
    <div class="age_other">
        <h3 style="margin-top:39px;margin-bottom:39px;font-size:25px;">basic-narrowing-down</h3>
        <p>purpose of use</p><div class="cp_ipselect cp_sl04">
                <select name="request">
                    <option value="">Don't care</option><option value="1" <?php if ($user['request'] === 1) echo 'selected' ?>>Make friends</option>
    <option value="2" <?php if ($user['request'] === 2) echo 'selected' ?>>Looking for a lover</option>
    <option value="3" <?php if ($user['request'] === 3) echo 'selected' ?>>learning language</option></select></div>
    
        <p>gender</p><div class="cp_ipselect cp_sl04">
                <select name="sex">
                    <option value="">Don't care</option><option value="1" <?php if ($user['sex'] === 1) echo 'selected' ?>>man</option>
    <option value="2" <?php if ($user['sex'] === 2) echo 'selected' ?>>women</option>
    <option value="3" <?php if ($user['sex'] === 3) echo 'selected' ?>>others</option></select></div>
        
        <p style="text-align:center;">national origin</p>
                <div class="cp_ipselect cp_sl04">
                    <select name="national_origin"><option value="">Don't care</option>
<option value="United States">United States</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="Afghanistan">Afghanistan</option> 
<option value="Albania">Albania</option> 
<option value="Algeria">Algeria</option> 
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option> 
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India">India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="North Macedonia">North Macedonia</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="United States">United States</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>
</select></div>
        <p>residence</p> <div class="cp_ipselect cp_sl04">
        <select name="place"><option value="">Don't care</option><option value="1" <?php if ($user['place'] === 1) echo 'selected' ?>>Hokkaido</option>
    <option value="2" <?php if ($user['place'] === 2) echo 'selected' ?>>Aomiri</option>
    <option value="3" <?php if ($user['place'] === 3) echo 'selected' ?>>Iwate</option>
    <option value="4" <?php if ($user['place'] === 4) echo 'selected' ?>>Miyagi</option>
    <option value="5" <?php if ($user['place'] === 5) echo 'selected' ?>>Akita</option>
    <option value="6" <?php if ($user['place'] === 6) echo 'selected' ?>>Yamagata</option>
    <option value="7" <?php if ($user['place'] === 7) echo 'selected' ?>>Fukushima</option>
    <option value="8" <?php if ($user['place'] === 8) echo 'selected' ?>>Ibaraki</option>
    <option value="9" <?php if ($user['place'] === 9) echo 'selected' ?>>Totigi</option>
    <option value="10" <?php if ($user['place'] === 10) echo 'selected' ?>>Gunma</option>
    <option value="11" <?php if ($user['place'] === 11) echo 'selected' ?>>Saitama</option>
    <option value="12" <?php if ($user['place'] === 12) echo 'selected' ?>>Chiba</option>
    <option value="13" <?php if ($user['place'] === 13) echo 'selected' ?>>Tokyo</option>
    <option value="14" <?php if ($user['place'] === 14) echo 'selected' ?>>Kanagawa</option>
    <option value="15" <?php if ($user['place'] === 15) echo 'selected' ?>>Niigata</option>
    <option value="16" <?php if ($user['place'] === 16) echo 'selected' ?>>Toyama</option>
    <option value="17" <?php if ($user['place'] === 17) echo 'selected' ?>>Ishikawa</option>
    <option value="18" <?php if ($user['place'] === 18) echo 'selected' ?>>Fukui</option>
    <option value="19" <?php if ($user['place'] === 19) echo 'selected' ?>>Yamanashi</option>
    <option value="20" <?php if ($user['place'] === 20) echo 'selected' ?>>Nagano</option>
    <option value="21" <?php if ($user['place'] === 21) echo 'selected' ?>>Gifu</option>
    <option value="22" <?php if ($user['place'] === 22) echo 'selected' ?>>Shizuoka</option>
    <option value="23" <?php if ($user['place'] === 23) echo 'selected' ?>>Aichi</option>
    <option value="24" <?php if ($user['place'] === 24) echo 'selected' ?>>Mie</option>
    <option value="25" <?php if ($user['place'] === 25) echo 'selected' ?>>Shiga</option>
    <option value="26" <?php if ($user['place'] === 26) echo 'selected' ?>>Kyoto</option>
    <option value="27" <?php if ($user['place'] === 27) echo 'selected' ?>>Osaka</option>
    <option value="28" <?php if ($user['place'] === 28) echo 'selected' ?>>Hyogo</option>
    <option value="29" <?php if ($user['place'] === 29) echo 'selected' ?>>Nara</option>
    <option value="30" <?php if ($user['place'] === 30) echo 'selected' ?>>Wakayama</option>
    <option value="31" <?php if ($user['place'] === 31) echo 'selected' ?>>Tottori</option>
    <option value="32" <?php if ($user['place'] === 32) echo 'selected' ?>>Shimane</option>
    <option value="33" <?php if ($user['place'] === 33) echo 'selected' ?>>Okayama</option>
    <option value="34" <?php if ($user['place'] === 34) echo 'selected' ?>>Hiroshima</option>
    <option value="35" <?php if ($user['place'] === 35) echo 'selected' ?>>Yamaguchi</option>
    <option value="36" <?php if ($user['place'] === 36) echo 'selected' ?>>Tokushima</option>
    <option value="37" <?php if ($user['place'] === 37) echo 'selected' ?>>Kagawa</option>
    <option value="38" <?php if ($user['place'] === 38) echo 'selected' ?>>Ehime</option>
    <option value="39" <?php if ($user['place'] === 39) echo 'selected' ?>>Kouchi</option>
    <option value="40" <?php if ($user['place'] === 40) echo 'selected' ?>>Fukuoka</option>
    <option value="41" <?php if ($user['place'] === 41) echo 'selected' ?>>Saga</option>
    <option value="42" <?php if ($user['place'] === 42) echo 'selected' ?>>Oita</option>
    <option value="43" <?php if ($user['place'] === 43) echo 'selected' ?>>Miyazaki</option>
    <option value="44" <?php if ($user['place'] === 44) echo 'selected' ?>>Nagasaki</option>
    <option value="45" <?php if ($user['place'] === 45) echo 'selected' ?>>Kumamoto</option>
    <option value="46" <?php if ($user['place'] === 46) echo 'selected' ?>>Kagoshima</option>
    <option value="47" <?php if ($user['place'] === 47) echo 'selected' ?>>Okinawa</option>
    <option value="48" <?php if ($user['place'] === 48) echo 'selected' ?>>other</option></select></div>
    </div>
    <div class="age_range">
   <h4>range of age</h4> <div class="cp_ipselect cp_sl04 age04">
                <select name="age1"><option value="">Don't care</option>
                    <option value="1" <?php if ($user['age1'] === 1) echo 'selected' ?>>18</option>
    <option value="2" <?php if ($user['age1'] === 2) echo 'selected' ?>>19</option>
    <option value="3" <?php if ($user['age1'] === 3) echo 'selected' ?>>20</option>
    <option value="4" <?php if ($user['age1'] === 4) echo 'selected' ?>>21</option>
    <option value="5" <?php if ($user['age1'] === 5) echo 'selected' ?>>22</option>
    <option value="6" <?php if ($user['age1'] === 6) echo 'selected' ?>>23</option>
    <option value="7" <?php if ($user['age1'] === 7) echo 'selected' ?>>24</option>
    <option value="8" <?php if ($user['age1'] === 8) echo 'selected' ?>>25</option>
    <option value="9" <?php if ($user['age1'] === 9) echo 'selected' ?>>26</option>
    <option value="10" <?php if ($user['age1'] === 10) echo 'selected' ?>>27</option>
    <option value="11" <?php if ($user['age1'] === 11) echo 'selected' ?>>28</option>
    <option value="12" <?php if ($user['age1'] === 12) echo 'selected' ?>>29</option>
    <option value="13" <?php if ($user['age1'] === 13) echo 'selected' ?>>30</option>
    <option value="14" <?php if ($user['age1'] === 14) echo 'selected' ?>>31</option>
    <option value="15" <?php if ($user['age1'] === 15) echo 'selected' ?>>32</option>
    <option value="16" <?php if ($user['age1'] === 16) echo 'selected' ?>>33</option>
    <option value="17" <?php if ($user['age1'] === 17) echo 'selected' ?>>34</option>
    <option value="18" <?php if ($user['age1'] === 18) echo 'selected' ?>>35</option>
    <option value="19" <?php if ($user['age1'] === 19) echo 'selected' ?>>36</option>
    <option value="20" <?php if ($user['age1'] === 20) echo 'selected' ?>>37</option>
    <option value="21" <?php if ($user['age1'] === 21) echo 'selected' ?>>38</option>
    <option value="22" <?php if ($user['age1'] === 22) echo 'selected' ?>>39</option>
    <option value="23" <?php if ($user['age1'] === 23) echo 'selected' ?>>40</option>
    <option value="24" <?php if ($user['age1'] === 24) echo 'selected' ?>>41</option>
    <option value="25" <?php if ($user['age1'] === 25) echo 'selected' ?>>42</option>
    <option value="26" <?php if ($user['age1'] === 26) echo 'selected' ?>>43</option>
    <option value="27" <?php if ($user['age1'] === 27) echo 'selected' ?>>44</option>
    <option value="28" <?php if ($user['age1'] === 28) echo 'selected' ?>>45</option>
    <option value="29" <?php if ($user['age1'] === 29) echo 'selected' ?>>46</option>
    <option value="30" <?php if ($user['age1'] === 30) echo 'selected' ?>>47</option>
    <option value="31" <?php if ($user['age1'] === 31) echo 'selected' ?>>48</option>
    <option value="32" <?php if ($user['age1'] === 32) echo 'selected' ?>>49</option>
    <option value="33" <?php if ($user['age1'] === 33) echo 'selected' ?>>50</option>
    <option value="34" <?php if ($user['age1'] === 34) echo 'selected' ?>>51</option>
    <option value="35" <?php if ($user['age1'] === 35) echo 'selected' ?>>52</option>
    <option value="36" <?php if ($user['age1'] === 36) echo 'selected' ?>>53</option>
    <option value="37" <?php if ($user['age1'] === 37) echo 'selected' ?>>54</option>
    <option value="38" <?php if ($user['age1'] === 38) echo 'selected' ?>>55</option>
    <option value="39" <?php if ($user['age1'] === 39) echo 'selected' ?>>56</option>
    <option value="40" <?php if ($user['age1'] === 40) echo 'selected' ?>>57</option>
    <option value="41" <?php if ($user['age1'] === 41) echo 'selected' ?>>58</option>
    <option value="42" <?php if ($user['age1'] === 42) echo 'selected' ?>>59</option>
    <option value="43" <?php if ($user['age1'] === 43) echo 'selected' ?>>60</option>
    <option value="44" <?php if ($user['age1'] === 44) echo 'selected' ?>>61</option>
    <option value="45" <?php if ($user['age1'] === 45) echo 'selected' ?>>62</option>
    <option value="46" <?php if ($user['age1'] === 46) echo 'selected' ?>>63</option>
    <option value="47" <?php if ($user['age1'] === 47) echo 'selected' ?>>64</option>
    <option value="48" <?php if ($user['age1'] === 48) echo 'selected' ?>>65</option>
    <option value="49" <?php if ($user['age1'] === 49) echo 'selected' ?>>66</option>
    <option value="50" <?php if ($user['age1'] === 50) echo 'selected' ?>>67</option>
    <option value="51" <?php if ($user['age1'] === 51) echo 'selected' ?>>68</option>
    <option value="52" <?php if ($user['age1'] === 52) echo 'selected' ?>>69</option></select></div>
    <p>～</p> <div class="cp_ipselect cp_sl04 age04">
                <select name="age2"><option value="">Don't care</option>
                    <option value="1" <?php if ($user['age2'] === 1) echo 'selected' ?>>18</option>
    <option value="2" <?php if ($user['age2'] === 2) echo 'selected' ?>>19</option>
    <option value="3" <?php if ($user['age2'] === 3) echo 'selected' ?>>20</option>
    <option value="4" <?php if ($user['age2'] === 4) echo 'selected' ?>>21</option>
    <option value="5" <?php if ($user['age2'] === 5) echo 'selected' ?>>22</option>
    <option value="6" <?php if ($user['age2'] === 6) echo 'selected' ?>>23</option>
    <option value="7" <?php if ($user['age2'] === 7) echo 'selected' ?>>24</option>
    <option value="8" <?php if ($user['age2'] === 8) echo 'selected' ?>>25</option>
    <option value="9" <?php if ($user['age2'] === 9) echo 'selected' ?>>26</option>
    <option value="10" <?php if ($user['age2'] === 10) echo 'selected' ?>>27</option>
    <option value="11" <?php if ($user['age2'] === 11) echo 'selected' ?>>28</option>
    <option value="12" <?php if ($user['age2'] === 12) echo 'selected' ?>>29</option>
    <option value="13" <?php if ($user['age2'] === 13) echo 'selected' ?>>30</option>
    <option value="14" <?php if ($user['age2'] === 14) echo 'selected' ?>>31</option>
    <option value="15" <?php if ($user['age2'] === 15) echo 'selected' ?>>32</option>
    <option value="16" <?php if ($user['age2'] === 16) echo 'selected' ?>>33</option>
    <option value="17" <?php if ($user['age2'] === 17) echo 'selected' ?>>34</option>
    <option value="18" <?php if ($user['age2'] === 18) echo 'selected' ?>>35</option>
    <option value="19" <?php if ($user['age2'] === 19) echo 'selected' ?>>36</option>
    <option value="20" <?php if ($user['age2'] === 20) echo 'selected' ?>>37</option>
    <option value="21" <?php if ($user['age2'] === 21) echo 'selected' ?>>38</option>
    <option value="22" <?php if ($user['age2'] === 22) echo 'selected' ?>>39</option>
    <option value="23" <?php if ($user['age2'] === 23) echo 'selected' ?>>40</option>
    <option value="24" <?php if ($user['age2'] === 24) echo 'selected' ?>>41</option>
    <option value="25" <?php if ($user['age2'] === 25) echo 'selected' ?>>42</option>
    <option value="26" <?php if ($user['age2'] === 26) echo 'selected' ?>>43</option>
    <option value="27" <?php if ($user['age2'] === 27) echo 'selected' ?>>44</option>
    <option value="28" <?php if ($user['age2'] === 28) echo 'selected' ?>>45</option>
    <option value="29" <?php if ($user['age2'] === 29) echo 'selected' ?>>46</option>
    <option value="30" <?php if ($user['age2'] === 30) echo 'selected' ?>>47</option>
    <option value="31" <?php if ($user['age2'] === 31) echo 'selected' ?>>48</option>
    <option value="32" <?php if ($user['age2'] === 32) echo 'selected' ?>>49</option>
    <option value="33" <?php if ($user['age2'] === 33) echo 'selected' ?>>50</option>
    <option value="34" <?php if ($user['age2'] === 34) echo 'selected' ?>>51</option>
    <option value="35" <?php if ($user['age2'] === 35) echo 'selected' ?>>52</option>
    <option value="36" <?php if ($user['age2'] === 36) echo 'selected' ?>>53</option>
    <option value="37" <?php if ($user['age2'] === 37) echo 'selected' ?>>54</option>
    <option value="38" <?php if ($user['age2'] === 38) echo 'selected' ?>>55</option>
    <option value="39" <?php if ($user['age2'] === 39) echo 'selected' ?>>56</option>
    <option value="40" <?php if ($user['age2'] === 40) echo 'selected' ?>>57</option>
    <option value="41" <?php if ($user['age2'] === 41) echo 'selected' ?>>58</option>
    <option value="42" <?php if ($user['age2'] === 42) echo 'selected' ?>>59</option>
    <option value="43" <?php if ($user['age2'] === 43) echo 'selected' ?>>60</option>
    <option value="44" <?php if ($user['age2'] === 44) echo 'selected' ?>>61</option>
    <option value="45" <?php if ($user['age2'] === 45) echo 'selected' ?>>62</option>
    <option value="46" <?php if ($user['age2'] === 46) echo 'selected' ?>>63</option>
    <option value="47" <?php if ($user['age2'] === 47) echo 'selected' ?>>64</option>
    <option value="48" <?php if ($user['age2'] === 48) echo 'selected' ?>>65</option>
    <option value="49" <?php if ($user['age2'] === 49) echo 'selected' ?>>66</option>
    <option value="50" <?php if ($user['age2'] === 50) echo 'selected' ?>>67</option>
    <option value="51" <?php if ($user['age2'] === 51) echo 'selected' ?>>68</option>
    <option value="52" <?php if ($user['age2'] === 52) echo 'selected' ?>>69</option></select></div></div>
    
    <div class="age_other">
        <h3 style="margin-top:39px;margin-bottom:39px;font-size:25px;">detail-narrowing-down</h3>
    
    <p>income</p><div class="cp_ipselect cp_sl04">
                <select name="income">
                    <option value="">Don't care</option><option value="1" <?php if ($user['income'] === 1) echo 'selected' ?>>less than 3,000,000 yen</option>
    <option value="2" <?php if ($user['income'] === 2) echo 'selected' ?>>3,000,000～5,000,000 yen</option>
    <option value="3" <?php if ($user['income'] === 3) echo 'selected' ?>>5,000,000～7,000,000 yen</option>
    <option value="4" <?php if ($user['income'] === 4) echo 'selected' ?>>7,000,000～9,000,000 yen</option>
    <option value="5" <?php if ($user['income'] === 5) echo 'selected' ?>>9,000,000～1,200,000 yen</option>
    <option value="6" <?php if ($user['income'] === 6) echo 'selected' ?>>more than 1200 yen</option>
    <option value="7" <?php if ($user['income'] === 7) echo 'selected' ?>>other</option></select></div>
        
    <p>profession</p>
        <div class="cp_ipselect cp_sl04">
        
                <select name="work">
                    <option value="">Don't care</option><option value="1" <?php if ($user['work'] === 1) echo 'selected' ?>>Listed company</option>
    <option value="2" <?php if ($user['work'] === 2) echo 'selected' ?>>Financial industry</option>
    <option value="3" <?php if ($user['work'] === 3) echo 'selected' ?>>Civil servant</option>
    <option value="4" <?php if ($user['work'] === 4) echo 'selected' ?>>consulting</option>
    <option value="5" <?php if ($user['work'] === 5) echo 'selected' ?>>Management / Executives</option>
    <option value="6" <?php if ($user['work'] === 6) echo 'selected' ?>>Major company</option>
    <option value="7" <?php if ($user['work'] === 7) echo 'selected' ?>>foreign-owned enterprise</option>
    <option value="8" <?php if ($user['work'] === 8) echo 'selected' ?>>trading company</option>
    <option value="9" <?php if ($user['work'] === 9) echo 'selected' ?>>Finance</option>
    <option value="10" <?php if ($user['work'] === 10) echo 'selected' ?>>Doctor</option>
    <option value="11" <?php if ($user['work'] === 11) echo 'selected' ?>>Caregiver</option>
    <option value="12" <?php if ($user['work'] === 12) echo 'selected' ?>>pharmacist</option>
    <option value="13" <?php if ($user['work'] === 13) echo 'selected' ?>>lawyer</option>
    <option value="14" <?php if ($user['work'] === 14) echo 'selected' ?>>Accountant</option>
    <option value="15" <?php if ($user['work'] === 15) echo 'selected' ?>>pilot</option>
    <option value="16" <?php if ($user['work'] === 16) echo 'selected' ?>>Flight attendant</option>
    <option value="17" <?php if ($user['work'] === 17) echo 'selected' ?>>Advertising</option>
    <option value="18" <?php if ($user['work'] === 18) echo 'selected' ?>>Media</option>
    <option value="19" <?php if ($user['work'] === 19) echo 'selected' ?>>education</option>
    <option value="20" <?php if ($user['work'] === 20) echo 'selected' ?>>IT</option>
    <option value="21" <?php if ($user['work'] === 21) echo 'selected' ?>>Food industry</option>
    <option value="22" <?php if ($user['work'] === 22) echo 'selected' ?>>Travel agency</option>
    <option value="23" <?php if ($user['work'] === 23) echo 'selected' ?>>Pharmaceutical</option>
    <option value="24" <?php if ($user['work'] === 24) echo 'selected' ?>>insurance</option>
    <option value="25" <?php if ($user['work'] === 25) echo 'selected' ?>>real estate business</option>
    <option value="26" <?php if ($user['work'] === 26) echo 'selected' ?>>Construction industry</option>
    <option value="27" <?php if ($user['work'] === 27) echo 'selected' ?>>Telecommunications industry</option>
    <option value="28" <?php if ($user['work'] === 28) echo 'selected' ?>>Distribution industry</option>
    <option value="29" <?php if ($user['work'] === 29) echo 'selected' ?>>WEB</option>
    <option value="30" <?php if ($user['work'] === 30) echo 'selected' ?>>bridal</option>
    <option value="31" <?php if ($user['work'] === 31) echo 'selected' ?>>creator</option>
    <option value="32" <?php if ($user['work'] === 32) echo 'selected' ?>>Hospitality industry</option>
    <option value="33" <?php if ($user['work'] === 33) echo 'selected' ?>>Reception</option>
    <option value="34" <?php if ($user['work'] === 34) echo 'selected' ?>>Cooks</option>
    <option value="35" <?php if ($user['work'] === 35) echo 'selected' ?>>Apparel industry</option>
    <option value="36" <?php if ($user['work'] === 36) echo 'selected' ?>>Cosmetics industry</option>
    <option value="37" <?php if ($user['work'] === 37) echo 'selected' ?>>Entertainment</option>
    <option value="38" <?php if ($user['work'] === 38) echo 'selected' ?>>Research position</option>
    <option value="39" <?php if ($user['work'] === 39) echo 'selected' ?>>Entertainment / Model</option>
    <option value="40" <?php if ($user['work'] === 40) echo 'selected' ?>>Entertainment / Model</option>
    <option value="41" <?php if ($user['work'] === 41) echo 'selected' ?>>athlete</option>
    <option value="42" <?php if ($user['work'] === 42) echo 'selected' ?>>Secretary</option>
    <option value="43" <?php if ($user['work'] === 43) echo 'selected' ?>>Clerk</option>
    <option value="44" <?php if ($user['work'] === 44) echo 'selected' ?>>Welfare</option>
    <option value="45" <?php if ($user['work'] === 45) echo 'selected' ?>>Childminder</option>
    <option value="46" <?php if ($user['work'] === 46) echo 'selected' ?>>Office worker</option>
    <option value="47" <?php if ($user['work'] === 47) echo 'selected' ?>>student</option>
    <option value="48" <?php if ($user['work'] === 48) echo 'selected' ?>>freelancer</option>
    <option value="49" <?php if ($user['work'] === 49) echo 'selected' ?>>nurse</option>
    <option value="50" <?php if ($user['work'] === 50) echo 'selected' ?>>Architect</option>
    <option value="51" <?php if ($user['work'] === 51) echo 'selected' ?>>Hairdresser</option>
    <option value="52" <?php if ($user['work'] === 52) echo 'selected' ?>>Dentist</option>
    <option value="53" <?php if ($user['work'] === 53) echo 'selected' ?>>Dental hygienist</option>
    <option value="54" <?php if ($user['work'] === 54) echo 'selected' ?>>other</option></select></div>
        
    <p>Educational background</p><div class="cp_ipselect cp_sl04">
                <select name="education">
                    <option value="">Don't care</option><option value=1 <?php if ($user['education'] === 1) echo 'selected' ?>>High school graduate</option>
    <option value="2" <?php if ($user['education'] === 2) echo 'selected' ?>>Two-year college degree</option>
    <option value="3" <?php if ($user['education'] === 3) echo 'selected' ?>>Technical Associate graduate</option>
    <option value="4" <?php if ($user['education'] === 4) echo 'selected' ?>>University graduate</option>
    <option value="5" <?php if ($user['education'] === 5) echo 'selected' ?>>other</option></select></div>
        
    <p>Holiday</p><div class="cp_ipselect cp_sl04">
                <select name="holiday">
                    <option value="">Don't care</option> <option value="1" <?php if ($user['holiday'] === 1) echo 'selected' ?>>sunday/saturday</option>
    <option value="2" <?php if ($user['holiday'] === 2) echo 'selected' ?>>Weekdays</option>
    <option value="3" <?php if ($user['holiday'] === 3) echo 'selected' ?>>Irregular</option>
    <option value="4" <?php if ($user['holiday'] === 4) echo 'selected' ?>>other</option></select></div>
        
      <p>Figure</p><div class="cp_ipselect cp_sl04">
                <select name="size">
                    <option value="">Don't care</option><option value="1" <?php if ($user['size'] === 1) echo 'selected' ?>>slim</option>
    <option value="2" <?php if ($user['size'] === 2) echo 'selected' ?>>slender</option>
    <option value="3" <?php if ($user['size'] === 3) echo 'selected' ?>>skinny</option>
    <option value="4" <?php if ($user['size'] === 4) echo 'selected' ?>>lean</option>
    <option value="5" <?php if ($user['size'] === 5) echo 'selected' ?>>thick</option>
    <option value="6" <?php if ($user['size'] === 6) echo 'selected' ?>>voluptuous</option>
    <option value="7" <?php if ($user['size'] === 7) echo 'selected' ?>>stocky</option>
    <option value="8" <?php if ($user['size'] === 8) echo 'selected' ?>>large</option></select></div>
        
        <p>Alchool</p><div class="cp_ipselect cp_sl04">
                <select name="alchool">
                    <option value="">Don't care</option><option value="1" <?php if ($user['alchool'] === 1) echo 'selected' ?>>everyday</option>
    <option value="2" <?php if ($user['alchool'] === 2) echo 'selected' ?>>often</option>
    <option value="3" <?php if ($user['alchool'] === 3) echo 'selected' ?>>rarely</option>
    <option value="4" <?php if ($user['alchool'] === 4) echo 'selected' ?>>not</option></select></div>
        
    <p>tobacco</p><div class="cp_ipselect cp_sl04">
                <select name="cigarette">
                    <option value="">Don't care</option><option value="1" <?php if ($user['cigarette'] === 1) echo 'selected' ?>>often</option>
    <option value="2" <?php if ($user['cigarette'] === 2) echo 'selected' ?>>rarely</option>
    <option value="3" <?php if ($user['cigarette'] === 3) echo 'selected' ?>>not</option></select></div>
        
    <p>Housemate</p><div class="cp_ipselect cp_sl04">
                <select name="cohabitants">
                    <option value="">Don't care</option><option value="1" <?php if ($user['cohabitants'] === 1) echo 'selected' ?>>Living alone</option>
    <option value="2" <?php if ($user['cohabitants'] === 2) echo 'selected' ?>>living with my family</option>
    <option value="3" <?php if ($user['cohabitants'] === 3) echo 'selected' ?>>living with my brother or sister</option>
    <option value="4" <?php if ($user['cohabitants'] === 4) echo 'selected' ?>>living with my friends</option>
    <option value="5" <?php if ($user['cohabitants'] === 5) echo 'selected' ?>>living with my pet</option>
    <option value="6" <?php if ($user['cohabitants'] === 6) echo 'selected' ?>>other</option></select></div>
    

        <input type="hidden" name="check">
    <style>
label {
  color: white;  
  background-color: #008dde;
  padding: 6px;
  border-radius: 12px;
    margin-top: 10px;
    margin: 0 auto;
    text-align: center;
    padding-left: 30px;
    padding-right: 30px;
}
</style>
    <label for="upload_image1">
    OK
    <input type="submit" value="送信"  id="upload_image1" style="display:none;">
</label></div>
    </form>
<?php } ?>

        </main>
             <script>
var luminousTrigger = document.querySelectorAll('.lightbox');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>

    <div class="menu2"><a href="index.php?page=member_top"><div class="menu_img"><img src="core/pages/pg_img/search.png"><p>SEARCH</p></div></a>
        <a href="index.php?page=category"><div class="menu_img"><img src="core/pages/pg_img/icontenis.png"><p>CATEGORY</p></div></a>
        <a href="index.php?page=iine"><div class="menu_img"><img src="core/pages/pg_img/heart.png"><p>GOOD</p></div></a>
        <a href="index.php?page=inbox"><div class="menu_img"><img src="core/pages/pg_img/letter.png"><p>INBOX</p></div></a>
        <a href="index.php?page=my_profile"><div class="menu_img"><img src="core/pages/pg_img/mypage.png"><p>MY PAGE</p></div></a>
        
        </div>
    </body>
</html>











