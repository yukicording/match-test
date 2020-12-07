<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/top.css">
    <link rel="stylesheet" href="core/pages/css/top_responsible.css">
    <link rel="stylesheet" href="core/pages/css/luxbar.min.css">
    <link rel="stylesheet" href="core/pages/css/login.css">
    
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $password = $_POST['password1'];
    $email = $_POST['email1']; 
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $place = $_POST['place'];
    $request = $_POST['request'];
    $accept = $_POST['accept'];
    $errs = array();

    //エラーが無ければデータを挿入
    if (empty($errs)) {
        $password1 = password_hash($password, PASSWORD_DEFAULT);
        if(insert_member_data($name, $password1, $email, $sex, $age, $place, $request, $mysqli)){ 
        $image_id = select_image_id($password1, $mysqli);
        $id = (int) $image_id[0]['user_id'];
        insert_default_image($id, $mysqli);
        insert_refinement($id, $mysqli);
        }
        }else {
           $errs['password'] = '登録に失敗しました。'; 
        }
        
    }
 ?>






<header id="luxbar" class="luxbar-fixed">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-light">
        <ul class="luxbar-navigation">
            <li class="luxbar-header">
                <a href="index.php?page=top" class="luxbar-brand">e-dea</a>
                <label class="luxbar-hamburger luxbar-hamburger-doublespin" 
                id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
            </li>
            <li class="luxbar-item"><a href="index.php?page=top#features">特徴</a></li>
            <li class="luxbar-item"><a href="index.php?page=top#howto">使い方</a></li>
            <li class="luxbar-item"><a href="index.php?page=top#price">料金</a></li>
            <li class="luxbar-item"><a href="index.php?page=login" class="login">ログイン</a></li>
            <li class="luxbar-item"><a href="index.php?page=sign_up" class="login">新規登録</a></li>
        </ul>
    </div>
</header>
    <div id="login">
<?php
    if (!empty($errs['name'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['name']);?></p>
    <?php } ?>
        <?php
    if (!empty($errs['email'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['email']);?></p>
    <?php } ?>
        <?php
    if (!empty($errs['sex'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['sex']);?></p>
    <?php } ?>
        <?php
    if (!empty($errs['age'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['age']);?></p>
    <?php } ?>
        <?php
    if (!empty($errs['place'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['place']);?></p>
    <?php } ?>
        <?php
    if (!empty($errs['request'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['request']);?></p>
    <?php } ?>
        
        <?php
    if (!empty($errs['accept'])) { ?>
       <p style="color: red;"><?php echo html_escape($errs['accept']);?></p>
    <?php } ?>
		<h1>registration<a href="index.php?page=login" class="login">（login is here.）</a></h1>
<p>※Please fill in all.（すべての項目にご記入お願いします。）</p>
		<form action="" method="post">

			<fieldset>
                <p><input type="text" name="name" placeholder="Nickname (within 6 words)"></p>
                <?php
    if (!empty($errs['name'])) {
        echo html_escape($errs['name']);
    }
    ?>
				<p><input type="text" name="email" placeholder="email address"></p> 
                <p><input type="text" name="email1" placeholder="one more please input your email address">
                <?php
    if (!empty($errs['email'])) {
        echo html_escape($errs['email']);
    }
    ?></p> <!-- JS because of IE support; better: placeholder="Username" -->

				<p><input type="password" name="password1" placeholder="password"></p><?php
    if (!empty($errs['password'])) {
        echo html_escape($errs['password']);
    }
    ?> <!-- JS because of IE support; better: placeholder="Password" -->
                <p style="text-align:center;">gender</p>
<div class="cp_ipselect cp_sl04">

                <select name="sex"><option value=""　hidden>Unselected</option>
    <option value="1">man</option>
                    <option value="2">women</option>
    <option value="3">other</option></select>
                </div>
<p style="text-align:center;">Purpose of use</p><div class="cp_ipselect cp_sl04">
                <select name="request">
                    <option value="" hidden>Unselected</option><option value="1">Make friends</option>
    <option value="2">Looking for a lover</option>
    <option value="3">learning language</option></select></div>
                <p style="text-align:center;">age</p>
<div class="cp_ipselect cp_sl04">
    <select name="age">
    <option value="">Unselected</option>
    <option value="3">20</option>
    <option value="4">21</option>
    <option value="5">22</option>
    <option value="6">23</option>
    <option value="7">24</option>
    <option value="8">25</option>
    <option value="9">26</option>
    <option value="10">27</option>
    <option value="11">28</option>
    <option value="12">29</option>
    <option value="13">30</option>
    <option value="14">31</option>
    <option value="15">32</option>
    <option value="16">33</option>
    <option value="17">34</option>
    <option value="18">35</option>
    <option value="19">36</option>
    <option value="20">37</option>
    <option value="21">38</option>
    <option value="22">39</option>
    <option value="23">40</option>
    <option value="24">41</option>
    <option value="25">42</option>
    <option value="26">43</option>
    <option value="27">44</option>
    <option value="28">45</option>
    <option value="29">46</option>
    <option value="30">47</option>
    <option value="31">48</option>
    <option value="32">49</option>
    <option value="33">50</option>
    <option value="34">51</option>
    <option value="35">52</option>
    <option value="36">53</option>
    <option value="37">54</option>
    <option value="38">55</option>
    <option value="39">56</option>
    <option value="40">57</option>
    <option value="41">58</option>
    <option value="42">59</option>
    <option value="43">60</option>
    <option value="44">61</option>
    <option value="45">62</option>
    <option value="46">63</option>
    <option value="47">64</option>
    <option value="48">65</option>
    <option value="49">66</option>
    <option value="50">67</option>
    <option value="51">68</option>
    <option value="52">69</option>
    </select></div>
                <p style="text-align:center;">residence</p>
                <div class="cp_ipselect cp_sl04">
                <select name="place">
    <option value="">
Unselected</option>
    <option value="1">北海道</option>
    <option value="2">青森</option>
    <option value="3">岩手</option>
    <option value="4">宮城</option>
    <option value="5">秋田</option>
    <option value="6">山形</option>
    <option value="7">福島</option>
    <option value="8">茨木</option>
    <option value="9">栃木</option>
    <option value="10">群馬</option>
    <option value="11">埼玉</option>
    <option value="12">千葉</option>
    <option value="13">東京</option>
    <option value="14">神奈川</option>
    <option value="15">新潟</option>
    <option value="16">富山</option>
    <option value="17">石川</option>
    <option value="18">福井</option>
    <option value="19">山梨</option>
    <option value="20">長野</option>
    <option value="21">岐阜</option>
    <option value="22">静岡</option>
    <option value="23">愛知</option>
    <option value="24">三重</option>
    <option value="25">滋賀</option>
    <option value="26">京都</option>
    <option value="27">大阪</option>
    <option value="28">兵庫</option>
    <option value="29">奈良</option>
    <option value="30">和歌山</option>
    <option value="31">鳥取</option>
    <option value="32">島根</option>
    <option value="33">岡山</option>
    <option value="34">広島</option>
    <option value="35">山口</option>
    <option value="36">徳島</option>
    <option value="37">香川</option>
    <option value="38">愛媛</option>
    <option value="39">高知</option>
    <option value="40">福岡</option>
    <option value="41">佐賀</option>
    <option value="42">大分</option>
    <option value="43">宮崎</option>
    <option value="44">長崎</option>
    <option value="45">熊本</option>
    <option value="46">鹿児島</option>
    <option value="47">沖縄</option>
    <option value="48">その他</option>
                </select></div>
                <p style="text-align:center;">Terms of service</p>
                
                
                <div class="scroll">利用規約
この利用規約（以下，「本規約」といいます。）は，＿＿＿＿＿（以下，「当社」といいます。）がこのウェブサイト上で提供するサービス（以下，「本サービス」といいます。）の利用条件を定めるものです。登録ユーザーの皆さま（以下，「ユーザー」といいます。）には，本規約に従って，本サービスをご利用いただきます。

第1条（適用）
本規約は，ユーザーと当社との間の本サービスの利用に関わる一切の関係に適用されるものとします。
当社は本サービスに関し，本規約のほか，ご利用にあたってのルール等，各種の定め（以下，「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の一部を構成するものとします。
本規約の規定が前条の個別規定の規定と矛盾する場合には，個別規定において特段の定めなき限り，個別規定の規定が優先されるものとします。
第2条（利用登録）
本サービスにおいては，登録希望者が本規約に同意の上，当社の定める方法によって利用登録を申請し，当社がこれを承認することによって，利用登録が完了するものとします。
当社は，利用登録の申請者に以下の事由があると判断した場合，利用登録の申請を承認しないことがあり，その理由については一切の開示義務を負わないものとします。
利用登録の申請に際して虚偽の事項を届け出た場合
本規約に違反したことがある者からの申請である場合
その他，当社が利用登録を相当でないと判断した場合
第3条（ユーザーIDおよびパスワードの管理）
ユーザーは，自己の責任において，本サービスのユーザーIDおよびパスワードを適切に管理するものとします。
ユーザーは，いかなる場合にも，ユーザーIDおよびパスワードを第三者に譲渡または貸与し，もしくは第三者と共用することはできません。当社は，ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には，そのユーザーIDを登録しているユーザー自身による利用とみなします。
ユーザーID及びパスワードが第三者によって使用されたことによって生じた損害は，当社に故意又は重大な過失がある場合を除き，当社は一切の責任を負わないものとします。
第4条（利用料金および支払方法）
ユーザーは，本サービスの有料部分の対価として，当社が別途定め，本ウェブサイトに表示する利用料金を，当社が指定する方法により支払うものとします。
ユーザーが利用料金の支払を遅滞した場合には，ユーザーは年14．6％の割合による遅延損害金を支払うものとします。
第5条（禁止事項）
ユーザーは，本サービスの利用にあたり，以下の行為をしてはなりません。

法令または公序良俗に違反する行為
犯罪行為に関連する行為
本サービスの内容等，本サービスに含まれる著作権，商標権ほか知的財産権を侵害する行為
当社，ほかのユーザー，またはその他第三者のサーバーまたはネットワークの機能を破壊したり，妨害したりする行為
本サービスによって得られた情報を商業的に利用する行為
当社のサービスの運営を妨害するおそれのある行為
不正アクセスをし，またはこれを試みる行為
他のユーザーに関する個人情報等を収集または蓄積する行為
不正な目的を持って本サービスを利用する行為
本サービスの他のユーザーまたはその他の第三者に不利益，損害，不快感を与える行為
他のユーザーに成りすます行為
当社が許諾しない本サービス上での宣伝，広告，勧誘，または営業行為
面識のない異性との出会いを目的とした行為
当社のサービスに関連して，反社会的勢力に対して直接または間接に利益を供与する行為
その他，当社が不適切と判断する行為
第6条（本サービスの提供の停止等）
当社は，以下のいずれかの事由があると判断した場合，ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。
本サービスにかかるコンピュータシステムの保守点検または更新を行う場合
地震，落雷，火災，停電または天災などの不可抗力により，本サービスの提供が困難となった場合
コンピュータまたは通信回線等が事故により停止した場合
その他，当社が本サービスの提供が困難と判断した場合
当社は，本サービスの提供の停止または中断により，ユーザーまたは第三者が被ったいかなる不利益または損害についても，一切の責任を負わないものとします。
第7条（利用制限および登録抹消）
当社は，ユーザーが以下のいずれかに該当する場合には，事前の通知なく，ユーザーに対して，本サービスの全部もしくは一部の利用を制限し，またはユーザーとしての登録を抹消することができるものとします。
本規約のいずれかの条項に違反した場合
登録事項に虚偽の事実があることが判明した場合
料金等の支払債務の不履行があった場合
当社からの連絡に対し，一定期間返答がない場合
本サービスについて，最終の利用から一定期間利用がない場合
その他，当社が本サービスの利用を適当でないと判断した場合
当社は，本条に基づき当社が行った行為によりユーザーに生じた損害について，一切の責任を負いません。
第8条（退会）
ユーザーは，当社の定める退会手続により，本サービスから退会できるものとします。

第9条（保証の否認および免責事項）
当社は，本サービスに事実上または法律上の瑕疵（安全性，信頼性，正確性，完全性，有効性，特定の目的への適合性，セキュリティなどに関する欠陥，エラーやバグ，権利侵害などを含みます。）がないことを明示的にも黙示的にも保証しておりません。
当社は，本サービスに起因してユーザーに生じたあらゆる損害について一切の責任を負いません。ただし，本サービスに関する当社とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合，この免責規定は適用されません。
前項ただし書に定める場合であっても，当社は，当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当社またはユーザーが損害発生につき予見し，または予見し得た場合を含みます。）について一切の責任を負いません。また，当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害の賠償は，ユーザーから当該損害が発生した月に受領した利用料の額を上限とします。
当社は，本サービスに関して，ユーザーと他のユーザーまたは第三者との間において生じた取引，連絡または紛争等について一切責任を負いません。
第10条（サービス内容の変更等）
当社は，ユーザーに通知することなく，本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし，これによってユーザーに生じた損害について一切の責任を負いません。

第11条（利用規約の変更）
当社は，必要と判断した場合には，ユーザーに通知することなくいつでも本規約を変更することができるものとします。なお，本規約の変更後，本サービスの利用を開始した場合には，当該ユーザーは変更後の規約に同意したものとみなします。

第12条（個人情報の取扱い）
当社は，本サービスの利用によって取得する個人情報については，当社「プライバシーポリシー」に従い適切に取り扱うものとします。

第13条（通知または連絡）
ユーザーと当社との間の通知または連絡は，当社の定める方法によって行うものとします。当社は,ユーザーから,当社が別途定める方式に従った変更届け出がない限り,現在登録されている連絡先が有効なものとみなして当該連絡先へ通知または連絡を行い,これらは,発信時にユーザーへ到達したものとみなします。

第14条（権利義務の譲渡の禁止）
ユーザーは，当社の書面による事前の承諾なく，利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し，または担保に供することはできません。

第15条（準拠法・裁判管轄）
本規約の解釈にあたっては，日本法を準拠法とします。
本サービスに関して紛争が生じた場合には，当社の本店所在地を管轄する裁判所を専属的合意管轄とします。</div><input type="checkbox" name="accept" value="1">I agree.<br><br>
                
                
		<p><input type="submit" value="submit"></p>
                
			</fieldset>

		</form>

		

	</div>
	
    </body>
</html>