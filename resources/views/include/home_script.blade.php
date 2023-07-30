
<div id="google_translate_element" style="display:none"></div>
<script type="text/javascript">

function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
}

function changeLanguageByButtonClick() {
  var language = document.getElementById("language").value;
  var selectField = document.querySelector("#google_translate_element select");
  for(var i=0; i < selectField.children.length; i++){
    var option = selectField.children[i];
    // find desired langauge and change the former language of the hidden selection-field 
    if(option.value==language){
       selectField.selectedIndex = i;
       // trigger change event afterwards to make google-lib translate this side
       selectField.dispatchEvent(new Event('change'));
       break;
    }
  }
}
</script>

<script src="{{ URL('../code.tidio.co_443/m2k9pheaphnefxywvr72ihztzgigxe6f.js') }}" async></script>

<script type="text/javascript" src="{{ URL('../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit') }}"></script>