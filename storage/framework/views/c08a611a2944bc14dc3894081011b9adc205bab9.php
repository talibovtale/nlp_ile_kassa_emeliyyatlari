



<style>
@import  url("https://fonts.googleapis.com/css?family=Dosis");
body {
  height:100vh;
  overflow:hidden;
  color: #fff;
  font-family: 'Dosis', serif;
  font-weight: 400;
  padding: 0px;
  margin: 0px;
  -webkit-font-smoothing: antialiased;
  background-image: linear-gradient(to right, rgb(0,60,128) 0%, #2575fc 100%);
  background-size: cover;
  background-repeat: no-repeat;
}
#t-rump{
  width:120px;
  vertical-align:middle;
  position:absolute;
  margin-left:-100px;
  left:18%;
  top:6px;
}
#wrapper {
  margin:0px auto 20px;
  width:80%;
  max-width:620px;
  text-align: center;
  position:relative;
}
#result{
  margin:auto;
  padding:30px 115px 10px;
  font-size:1.1em;
  line-height:1.5em;
 
}
.container {
  display: grid;
  color: #333;
  border-top: 6px solid #880000;
  background:#fff;
  width:100%;
  max-width:600px;
  border-radius:8px;
  text-align: center;
  vertical-align:middle;
  margin: 20px 0 20px;
}
.button {
  font-family: 'Dosis', arial, san-serif;
  display: inline-block;
  text-align: center;
  text-weight:900;
  padding:12px 15px;
  cursor:pointer;
	transition: all 350ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	color: #fff;
  background-image: linear-gradient(#64a3e3,#4483bd);
	box-shadow: #333 0 0px 0px 0px inset;
  border-radius:0 0 6px 6px;
}

.button:hover {
	color: #fff;
	box-shadow: #880000 0 0 0 40px inset;
}
.button.reset:hover {
	color: #fff;
	box-shadow: #333 0 0 0 40px inset;
}
#ask-input {
  background: #e0e0e0;
  color: #333;
  box-sizing: border-box;
  width:100%;
  padding:14px 18px 14px;
  margin:20px 0 0 0;
  border:none;
  border-bottom: 0;
  display: inline-block;
}
#ask-input:focus {
  outline: none;
}

table {border: 1px solid black;}
	table td {border: 1px solid black;}
    table th {border: 1px solid black;}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head> <br><center>
<header style="max-width:800px">

<div style="width:20%;">

<a href="/"><img height="70" src="https://www.draftegitim.com/content/school_logo/0137a5884df26b1f51730dde4b70b60c8cbc087c83b1d61c1c46def8a0c9662d.png" alt=""></a>
</div>

<div style="width:100%;">

      <q style="font-family:Arial; font-size:22px" > NİTQ İLƏ İDARƏ EDİLƏ BİLƏN KASSA ƏMƏLİYYATLARI </q> &nbsp &nbsp
</div>
    </header>
    </center>
    


    <div style="float:left;width:50%;">

  <!-- ilk bolum -->

<body translate="no" >
  <div id="wrapper">
<image id="t-rump" src="https://saeculum.b-cdn.net/wp-content/uploads/2019/09/Animation-Icon.gif">
  <div class="container">
      <div id="final_span" style="min-height:80px;font-size:22px;  margin:auto;
  padding:30px 115px 10px;"> <b> Təbii dil mətnlərini emal edərək kassa əməliyyatlarını yerinə yetirə bilirəm...</b></div>
       <div  class="final" style="background-color:yellow;" >Sizin əməliyyatı gözləyirəm...</div>
  
    <button class="button"  id="start_button" onclick="startButton(event)"  class="right"><img id="start_img" style="width: 22px;" src="https://findicons.com/files/icons/2320/x_mac_general/256/microphone.png" alt="">  DANIŞMAQ ÜÇÜN KLİKLƏYİN </button>
  </div>


  <div id="info">
  <p id="info_start">Fərqli dillərdə danışmaq üçün klikləyin..</p>
  <p id="info_speak_now">Speak now.</p>
</div>



  <div id="div_language">
    <select id="select_language" onchange="updateCountry()"></select>
    &nbsp;&nbsp;
    <select id="select_dialect"></select>
  </div>
</div>



</div>
<div style="float:right;width:50%;">
<!-- ikinci bolum -->


<div class="container">
  <h2>KASSA ƏMƏLİYYATLARI </w> </h2>   
 
  <w>KASSADA SON QALIQ : <b style="color:green" >5170 ₼ </b> 
  <table style="color:darkred; background-color:transperent;  text-align: center;
" >
    <thead style="color:black;" >
      <tr>
        <th>Açıqlama</th>
        <th>Mədaxil</th>
        <th>Məxaric</th>
        <th>Kassada Qalıq</th>
        <th>Tarix</th>
      </tr>
    </thead>
  
    <tbody>
 

      <?php $__currentLoopData = $anbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anbars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr style="color :  <?php if($anbars['Mexaric']>0){echo 'darkred; background: yellow';} else{ echo 'darkblue'; }?>">

<td ><?php echo e($anbars->Acıqlama); ?></td>
<td><?php echo e($anbars->Medaxil); ?> ₼ </td>
<td><?php echo e($anbars->Mexaric); ?> ₼ </td>
<td><?php echo e($anbars->Qaliq); ?> ₼ </td>
<td ><?php echo e($anbars->tarix); ?></td>

</tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    
  </table>
</div>

</div>
<div style="clear:both;">

  
<?php if(isset($_GET['em'])) {
$medaxil = '/(?<aciqlama>(.+))\s(?=).*(?<emeliyyat_qrupu>(m[e,ə]daxil)).*?.(?<pul>(\d+[ ?]?\d+[ ?]?\d+)).*+$/iu';
$mexaric = '/(?<aciqlama>(.+))\s(?=).*(?<emeliyyat_qrupu>(m[e,ə]xaric)).*?.(?<pul>(\d+[ ?]?\d+[ ?]?\d+)).*+$/iu';
$str = $_GET['aciqlama'];

preg_match_all($medaxil, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result

if ($matches){
  $pul = str_replace(" ", "", $matches[0]['pul']);
  print "Açıqlama: ".$matches[0]['aciqlama']."<br>"."Medaxil".$matches[0]['emeliyyat_qrupu']."<br>"."Pul: ".$pul;
}
else{
  preg_match_all($mexaric, $str, $matches, PREG_SET_ORDER, 0);
  $pul = str_replace(" ", "", $matches[0]['pul']);


  print "Açıqlama: ".$matches[0]['aciqlama']."<br>"."Mexaric:  ".$matches[0]['emeliyyat_qrupu']."<br>"."Pul: ".$pul;


}
}


if (isset($_GET['saat'])) {
  $re = '/(?<olke>(\w+))+.*/iu';
  $olke = $_GET['saat'];
  
  preg_match_all($re, $olke, $matches, PREG_SET_ORDER, 0);
  
  // Print the entire match result
?> 

<script type="text/javascript">
 window.onload = function (){
    var win = window.open('https://time.is/<?php print $matches[0]['olke']; ?>','windowname','width=700,height=600,left=50%,top=30,status=0');
    setTimeout(function() { win.close();}, 9000);
}
</script>
<?php }else{} ?>
</div>







<script>









var langs =[
['Azərbaycanca',    ['az-AZ']],
 ['English',         ['en-EN']],
 ['Türkçe',          ['tr-TR']],
 ['Pусский',          ['ru-RU']]];

for (var i = 0; i < langs.length; i++) {
  select_language.options[i] = new Option(langs[i][0], i);
}
select_language.selectedIndex = 0;
updateCountry();
select_dialect.selectedIndex = 0;
showInfo('info_start');

function updateCountry() {
  for (var i = select_dialect.options.length - 1; i >= 0; i--) {
    select_dialect.remove(i);
  }
  var list = langs[select_language.selectedIndex];
  for (var i = 1; i < list.length; i++) {
    select_dialect.options.add(new Option(list[i][1], list[i][0]));
  }
  select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
}

var create_email = false;
var final_transcript = '';
var recognizing = false;
var ignore_onend;
var start_timestamp;
if (!('webkitSpeechRecognition' in window)) {
  upgrade();
} else {
  start_button.style.display = 'inline-block';
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;

  recognition.onstart = function() {
    recognizing = true;
    final_span.innerHTML = "Sizin nitqinizi təhlil edirəm...";
  };

  recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
      ignore_onend = true;
    }
    if (event.error == 'audio-capture') {
      ignore_onend = true;
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 50) {
        showInfo('info_blocked');
      } else {
        showInfo('info_denied');
      }
      ignore_onend = true;
    }
  };

  recognition.onend = function() {
    recognizing = false;
    if (ignore_onend) {
      return;
    }
    final_span.innerHTML = "Danışmaq üçün klikləyin...";
    if (!final_transcript) {
      showInfo('info_start');
      return;
    }
    showInfo('');
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById('final_span'));
      window.getSelection().addRange(range);
    }
  };

  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        
        if (event.results[i][0].transcript == " xəta"){
         
          recognition.stop();
          alert("Əməliyyat baş tutmadı.. \n  Dayandırıldı..")

        }
        else if (event.results[i][0].transcript == " əməliyyat tamamlandı"){
         
         recognition.stop();
         

         window.location.href = "http://127.0.0.1:8000/?em=ok&aciqlama="+final_transcript;

         
         alert("əməliyyat uğurla yerinə yetirildi.. \n" + final_transcript)

       }
       else if (event.results[i][0].transcript == " vaxtı göstər"){
         
         recognition.stop();
         window.location.href = "http://127.0.0.1:8000/?saat="+final_transcript;
       }


        final_transcript += event.results[i][0].transcript;
        
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
 
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
   
    if (final_transcript || interim_transcript) {
      showButtons('inline-block');
    }
  };
}

function upgrade() {
  start_button.style.visibility = 'hidden';
  showInfo('info_upgrade');
}

var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}

var first_char = /\S/;
function capitalize(s) {
  return s.replace(first_char, function(m) { return m.toUpperCase(); });
}

function startButton(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = select_dialect.value;
  recognition.start();
  ignore_onend = false;
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
  showInfo('info_allow');
  showButtons('none');
  start_timestamp = event.timeStamp;
}

function showInfo(s) {
  if (s) {
    for (var child = info.firstChild; child; child = child.nextSibling) {
      if (child.style) {
        child.style.display = child.id == s ? 'inline' : 'none';
      }
    }
    info.style.visibility = 'visible';
  } else {
    info.style.visibility = 'hidden';
  }
}

var current_style;
function showButtons(style) {
  if (style == current_style) {
    return;
  }
  current_style = style;
  copy_button.style.display = style;
  email_button.style.display = style;
}
</script>


       </div>
        </div>
    </body>
</html>

<script src="<?php echo e(asset('js/app.js')); ?>"></script><?php /**PATH D:\Laravel\anbar\resources\views/home.blade.php ENDPATH**/ ?>