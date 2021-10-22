<!doctype html><html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://planetcalc.com/style/min/planetcalc_common_4064.css">  
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style media="all">
.social-float {
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  width: 350px;
      height: 400px;
      background: white;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
  z-index: 100;
}
td.comment_created {
    border-bottom: 0 !important;
    padding-bottom: 0 !important;
}
td.message {
  padding-top:0 !important;
}

#main_div { padding:0 }
.f_ {
  margin-top:0;
}

  #request_status { width:900px; }
  .modal-body {  max-height: 800px;}
.sofia {
  margin:8px auto;
  text-align:center;
}
.right-ads { margin:16px 0; }
.v5 {
  background-color:#fafafa;
}
.card-authors { padding:0 1.5em 1.5em 1.5em; }

.author-date {
  padding:16px 0;
}
.author-date i {
  padding-right:8px;
}
.author-date a {
  padding-right:32px;
}
#comments {
  margin-top:32px;
}
#comments .t9 {
  margin-top:0;
}
.ads-inline {
    text-align: center;
}
.embed-form {
  margin-bottom:16px;
}

div.social a.oc { margin-right:16px }
div.social { margin: 16px 0; }
div.social h4 { margin-bottom:0 }
.share-url-text { margin:16px 0 }
.share-mode { margin-bottom: 16px; }
.share-url-text div { width:100% }
.similar-calc ul {  padding:0; }
.similar-calc ul li { padding:0 0 16px 16px; display: inline-block; }
#div-gpt-ad-1634895141-1{min-height:250px}#div-gpt-ad-1634895141-2{min-height:250px}#div-gpt-ad-1634895141-3{min-height:250px}
@media (min-width:480px){#div-gpt-ad-1634895141-1{min-height:60px}#div-gpt-ad-1634895141-2{min-height:60px}}
@media (min-width:768px){#div-gpt-ad-1634895141-1{min-height:90px}#div-gpt-ad-1634895141-2{min-height:90px}#div-gpt-ad-1634895141-4{min-height:250px}}
@media (min-width:1500px){#div-gpt-ad-1634895141-1{min-height:90px}}</style>
<title>Online calculator: Hill cipher</title>
</head>
<body id="ui_viewer" class="y1 viewer">
<div class="pc-article-part"><div class="u5"><div class="w_ f8"  id="dialogv616e8dd13e2fa"><div class="x_ j0"><div class="j4 g8"><input class="l4" type="text" value="abcdefghijklmnopqrstuvwxyz ,."  name="alphabet" id="dialogv616e8dd13e2fa_alphabet"/><label class="h3 i3" for="dialogv616e8dd13e2fa_alphabet">Alphabet</label><div class="_3"></div></div><div class="n4"><div id="hlp_dialogv616e8dd13e2fa_alphabet" class="e4 c4">All symbols to be encrypted must belong to alphabet</div></div></div><div class="x_ j0"><div class="j4 m4 g8 "><textarea class="l4"  name="text" id="dialogv616e8dd13e2fa_text" rows="5" cols="60">the truth is out there</textarea>
<div class="c3 k3"><div class="e3"></div><div class="f3"><label class="h3 i3" for="dialogv616e8dd13e2fa_text">Text</label></div><div class="g3"></div></div></div><div class="n4"><div id="hlp_dialogv616e8dd13e2fa_text" class="e4 c4"></div></div></div><div class="x_ a0"><div class="j4 g8"><input class="l4" type="text" value="best hill cipher"  name="key" id="dialogv616e8dd13e2fa_key"/><label class="h3 i3" for="dialogv616e8dd13e2fa_key">Key</label><div class="_3"></div></div><div class="n4"><div id="hlp_dialogv616e8dd13e2fa_key" class="e4 c4"></div></div></div><div class="x_ f0"><div class="v8" id="dialogv616e8dd13e2fa_method"><label class="l8 w8">Transformation</label><div class="m8"><div class="h2"><div class="u2"><input type="radio" class="v2" id="dialogv616e8dd13e2fa_method0" name="method" checked value="c"/><div class="w2"><div class="x2"></div><div class="y2"></div></div></div><label for="dialogv616e8dd13e2fa_method0">Encrypt</label></div><div class="h2"><div class="u2"><input type="radio" class="v2" id="dialogv616e8dd13e2fa_method1" name="method" value="d"/><div class="w2"><div class="x2"></div><div class="y2"></div></div></div><label for="dialogv616e8dd13e2fa_method1">Decrypt</label></div></div></div>
<div class="n4"><div id="hlp_dialogv616e8dd13e2fa_method" class="e4 c4"></div></div></div><div class="x_ j0"><div class="r8"><button type="button" id="dialogv616e8dd13e2fa_calculate" class="c2 g2 s_ pc-btn-calc"><span id="dialogv616e8dd13e2fa_button_text">Calculate</span></button></div></div><div class="x_ j0"><div class="e8"><div id="dialogv616e8dd13e2fa__progress_" role="progressbar" class="c8 m0 t0"><div class="p0"></div><div class="q0"></div><div class="n0 r0"><span class="o0"></span></div><div class="n0 s0"><span class="o0"></span></div></div></div></div><div class="x_ j0"><div></div><div class="n4 x"><div id="hlp_default_dialogv616e8dd13e2fa" class="e4 c4"></div></div></div><div class="x_ j0"><div class="o8">Transformed text</div><div class="pc-output-value q8" id="dialogv616e8dd13e2fa_transformation">&nbsp;</div></div><div class="x_ j0"><div class="b2"><div class="pc-calc-footer"><div class="ba u8"></div></div></div></div></div><script>function Dialogv616e8dd13e2fa() {var me = this;me.id = "dialogv616e8dd13e2fa";me.GetElement = function () { return document.getElementById( me.id ); };me.GetEventHandlerName = function () { return "dialoghandlerv616e8dd13e2fa"; };this.dialog_controls = [new DialogInput("alphabet", this, 0,new ElementAccessorText()),new DialogInput("text", this, 0,new ElementAccessorText()),new DialogInput("key", this, 0,new ElementAccessorText()),new DialogInput("method", this, 0,new ElementAccessorRadio()),new DialogInput("calculate", this, 0,new ElementAccessorOperation()),new DialogInput("_progress_", this, 0,new ElementAccessorDefault()),new DialogInput("", this, 0,new ElementAccessorDefault()),new DialogInput("transformation", this, 0,new ElementAccessorOutput())];me.dialog_controls._all ={};me.dialog_controls.forEach( function( e ) { if (me[e.id]===undefined) me[e.id] = e; me.dialog_controls._all[e.id] = e;} );this.addHandler = function ( handler ) {this.dialog_controls.forEach(function(c) { c.addHandler( handler);});};this.SetValues = function ( values ) {this.dialog_controls.forEach(function(c) {if ( values[c.id]!==undefined ) { c.SetValue( values[c.id] ); }});};this.Clear = function ( ) {this.dialog_controls.forEach(function( c) { c.ResetValue();});};this.SetDefaultValues = function () { this.Clear();};this.GetValues = function () {var ret = {}; this.dialog_controls.forEach(function( c) { ret[c.id] = c.GetValue();});return ret;};this.Validate = function ( ) {for(var i=0;i<me.dialog_controls.length;++i) if (!me.dialog_controls[i].Validate()) return false; return true;};this.layout = function ( ) {}};document.addEventListener("DOMContentLoaded", function(event) {var dlg = new Dialogv616e8dd13e2fa();
var hd = new CalculatorHandler(new function () {
var me = this;
me.id = 3283;
me.global = 1;
var outputs = {};
me.sinks={change:[],done:[]};
me.startOnLoad = 1;
me.infinite = 0;
var inputs = {};
var renderers = {};
var recordsets = {};
var diagrams = {};
var handler, dialog, refreshTimer;
var worker; var proxies; var stubs;
var outer = this;
var Planetcalc = new function() { 
var inner = this; var Planetcalc = inner; var cpcData = new CalcProgressData();var Calculate3312_cpc = new CalcProgressControl(cpcData);
var Resources3312errors = {"e":"There is no modular multiplicative inverse for this integer"};inner.Resources3312errors=Resources3312errors;inner.Calculate3312 = function( ___inp___ ) {
var progressControl = Calculate3312_cpc;
var Calculate3312_result={};function  __impl__( __inp__ ) {

var a = __inp__["a"]===undefined?3:__inp__["a"];
var m = __inp__["m"]===undefined?26:__inp__["m"];
var errors = Resources3312errors;
var b = { "SetValue": function( v ) { Calculate3312_result["b"]=v; } };var ta = a;
if (ta > m)
  ta = ta % m;
if (ta < 0)
  ta = ta + m*(Math.floor(Math.abs(ta)/m) + 1);

var result = Planetcalc.Calculate3299( { "first":PCR.integer(ta.valueOf()), "second":PCR.integer(m.valueOf())} );
var res = Number(result.res.toString());
if (res != 1)
  throw {"source": "a", "message": errors["e"] };
else {
    var c2 = Number( result.coef2.toString() );
  var tx = (c2 % m + m) % m;
  b.SetValue(tx);
}

};
 __impl__(___inp___); if ( progressControl.completed() ) { progressControl.context = null; } return Calculate3312_result;};var Calculate3299_cpc = new CalcProgressControl(cpcData);inner.Calculate3299 = function( ___inp___ ) {
var progressControl = Calculate3299_cpc;
var Calculate3299_result={};function  __impl__( __inp__ ) {

var first = __inp__["first"]===undefined?"180":__inp__["first"];
var second = __inp__["second"]===undefined?"150":__inp__["second"];
var res = { "SetValue": function( v ) { Calculate3299_result["res"]=v; } };
var coef1 = { "SetValue": function( v ) { Calculate3299_result["coef1"]=v; } };
var coef2 = { "SetValue": function( v ) { Calculate3299_result["coef2"]=v; } };var euklid = {
  gcd: PCR.integer(1),
  x: PCR.integer(0),
  y: PCR.integer(0)
};

function gcd (a, b, holder) {
  if (a.eq(0) ) {
    holder.x = PCR.integer(0); 
    holder.y = PCR.integer(1);
    return b;
  }
  var q = b.divmod( a );
  var d = gcd (q.r, a, holder);
  var tx = holder.x;
  holder.x = holder.y.sub( q.q.mul( holder.x ) );
  holder.y = tx;
  return d;
}

euklid.gcd =gcd(first.gt( second ) ? second : first, first.gt( second ) ? first : second, euklid);
res.SetValue(euklid.gcd);
coef1.SetValue(euklid.y);
coef2.SetValue(euklid.x);
};
 __impl__(___inp___); if ( progressControl.completed() ) { progressControl.context = null; } return Calculate3299_result;};var Calculate3283_cpc = new CalcProgressControl(cpcData);
var Resources3283errors = {"key_invalid":"Wrong key. Key length should be square of integer.","key_wrong":"Wrong key. Key should contain only alphabet symbols","text_wrong":"Wrong text. Text should contain only alphabet symbols","NonSquare":"Wrong key. Key matrix should be square","Singular":"Wrong key. Key has degenerate matrix","key_bad":"Wrong key. Key matrix determinant does not have modular multiplicative inverse","method": {"c":"Encrypt","d":"Decrypt"}};inner.Resources3283errors=Resources3283errors;inner.Calculate3283 = function( ___inp___ ) {
var progressControl = Calculate3283_cpc;
var Calculate3283_result={};function  __impl__( __inp__ ) {

var alphabet = __inp__["alphabet"]===undefined?"abcdefghijklmnopqrstuvwxyz ,.":__inp__["alphabet"];
var key = __inp__["key"]===undefined?"best hill cipher":__inp__["key"];
var text = __inp__["text"]===undefined?"the truth is out there":__inp__["text"];
var errors = Resources3283errors;
var method = __inp__["method"]===undefined?"c":__inp__["method"];
var transformation = { "SetValue": function( v ) { Calculate3283_result["transformation"]=v; } };function MatrixSolver()
{
  this.c_valid = 0;
  this.c_nonsquare = -1;
  this.c_singular = -2;
  this.c_wrongdimensions = -3;

  function get(matrixarray, i, j)
  {
    var row = matrixarray[i];
    return row[j];
  }

  function columns(matrixarray)
  {
    var row = matrixarray[0];
    return row.length;
  }

  function rows(matrixarray)
  {
    return matrixarray.length;
  }

  function show(matrixarray)
  {
    var s = "";
    for(var i = 0; i < rows(matrixarray); ++i)
    {
      for(var j = 0; j < columns(matrixarray); ++j)
      {
        var row = matrixarray[i];
        s += " " + row[j];
      }
      s += "\n\r";
    }
    alert(s);
  }

  function minor(matrixarray, i, j)
  {
    var m = [];
    for(var k = 0; k < matrixarray.length; ++k)
    {
      if (k == i)
        continue;
      var row = matrixarray[k];
      var newrow = [];
      for(var l = 0; l < row.length; ++l)
      {
        if (l == j)
          continue;
        newrow.push(row[l]);
      }
      m.push(newrow);
    }
    return m;
  }

  this.calcMultiplication = function(matrixA, matrixB)
  {
    var result = [];
    var columnsA = columns(matrixA);
    var rowsA = rows(matrixA);
    var columnsB = columns(matrixB);
    var rowsB = rows(matrixB);
    if (columnsA != rowsB)
      throw this.c_wrongdimensions;


    for (var i = 0; i < rowsA; ++i)
    {
      var newrow = [];
      for (var j = 0; j < columnsB; ++j)
      {   
        var value = 0;
        for (var k = 0; k < rowsB; ++k)
        {
          value += get(matrixA, i, k) * get(matrixB, k, j);
        }
        newrow.push(value);
      }
      result.push(newrow);
    }
    return result;
  } 

  this.calcTransponent = function(matrixarray)
  {
    var transponent = [];
    var cols = columns(matrixarray);
    for (var i = 0; i < cols; ++i)
    {
      var newrow = [];
      var rowscount = rows(matrixarray);
      for (var j = 0; j < rowscount; ++j)
      {
        newrow[newrow.length] = get(matrixarray, j, i);
      }
      transponent[transponent.length] = newrow;
    }
    return transponent;
  } 

  this.calcScalar = function(matrixarray, scalarValue)
  {
    var scalar = [];
    var cols = columns(matrixarray);
    for (var i = 0; i < cols; ++i)
    {
      var newrow = [];
      var rowscount = rows(matrixarray);
      for (var j = 0; j < rowscount; ++j)
      {
        newrow.push(get(matrixarray, i, j)*scalarValue);
      }
      scalar.push(newrow);
    }
    return scalar;
  }

  this.calcDeterminant = function(matrixarray)
  {
    var columnsA = columns(matrixarray);
    var rowsA = rows(matrixarray);
    if (columnsA != rowsA)
      throw this.c_nonsquare;
    
    if (matrixarray.length == 1)
      return get(matrixarray, 0, 0);
    else if (matrixarray.length == 2)
      return get(matrixarray, 0, 0) * get(matrixarray, 1, 1) - get(matrixarray, 0, 1) * get(matrixarray, 1, 0);
    else
    {
      var det = 0;
      var cols = columns(matrixarray);
      for (var i = 0; i < cols; ++i)
      {
        det += Math.pow(-1, i)*get(matrixarray, 0, i)*this.calcDeterminant(minor(matrixarray, 0, i));
      }
      return det;
    }
  } 

  this.calcInverse = function(matrixarray)
  {
    var columnsA = columns(matrixarray);
    var rowsA = rows(matrixarray);
    if (columnsA != rowsA)
      throw this.c_nonsquare;
    var detA = this.calcDeterminant(matrixarray);
    if (detA == 0)
      throw this.c_singular;
    var minorsmatrix = [];
    for(var i = 0; i < rowsA; ++i)
    {
      var newrow = [];
      for(var j = 0; j < columnsA; ++j)
      {
        var val = this.calcDeterminant(minor(matrixarray, i,j));
        val = val * Math.pow(-1, i+j);
        newrow.push(val);
      }
      minorsmatrix.push(newrow);
    }
    var transponentminors = this.calcTransponent(minorsmatrix);
    var scalarresult = this.calcScalar(transponentminors, 1/detA);
    return scalarresult;
  }

  function norm(ta, m)
  {
    if (ta > m)
      ta = ta % m;
    if (ta < 0)
      ta = ta + m*(Math.floor(Math.abs(ta)/m) + 1);
    return ta;
  }

  this.calcScalarMod = function(matrixarray, scalarValue, modulus)
  {
    var scalar = [];
    var cols = columns(matrixarray);
    for (var i = 0; i < cols; ++i)
    {
      var newrow = [];
      var rowscount = rows(matrixarray);
      for (var j = 0; j < rowscount; ++j)
      {
        newrow.push( norm(get(matrixarray, i, j)*scalarValue, modulus) );
      }
      scalar.push(newrow);
    }
    return scalar;
  }

  this.calcDeterminantMod = function(matrixarray, modulus)
  {
    var columnsA = columns(matrixarray);
    var rowsA = rows(matrixarray);
    if (columnsA != rowsA)
      throw this.c_nonsquare;
    
    //show(matrixarray);

    if (matrixarray.length == 1)
      return norm(get(matrixarray, 0, 0), modulus);
    else if (matrixarray.length == 2)
    {
      return norm( get(matrixarray, 0, 0) * get(matrixarray, 1, 1) - get(matrixarray, 0, 1) * get(matrixarray, 1, 0), modulus );
    }
    else
    {
      var det = 0;
      var cols = columns(matrixarray);
      for (var i = 0; i < cols; ++i)
      {
        det += norm( Math.pow(-1, i)* get(matrixarray, 0, i) * this.calcDeterminantMod(minor(matrixarray, 0, i), modulus), modulus );
      }
      return norm(det, modulus);
    }
  } 

  this.calcInverseMod = function(matrixarray, modulus)
  {
    var columnsA = columns(matrixarray);
    var rowsA = rows(matrixarray);
    if (columnsA != rowsA)
      throw this.c_nonsquare;
    var detA = this.calcDeterminantMod(matrixarray, modulus);
    if (detA == 0)
      throw this.c_singular;
    var minorsmatrix = [];
    for(var i = 0; i < rowsA; ++i)
    {
      var newrow = [];
      for(var j = 0; j < columnsA; ++j)
      {
        var val = this.calcDeterminantMod(minor(matrixarray, i,j), modulus);
        val = norm( val * Math.pow(-1, i+j), modulus );
        newrow.push(val);
      }
      minorsmatrix.push(newrow);
    }
    var transponentminors = this.calcTransponent(minorsmatrix);

    var result = Planetcalc.Calculate3312( {  "a":detA, "m":modulus } );
    var scalarresult = this.calcScalarMod(transponentminors, result.b, modulus);
    return scalarresult;
  }
}

if (!(Math.sqrt(key.length) % 1 === 0))
  throw { "source":"key", "message":errors["key_invalid"]};
var patt=new RegExp("[^" + alphabet + "]");
if (patt.test(key))
  throw { "source":"key", "message":errors["key_wrong"]}; 
if (patt.test(text))
  throw { "source":"text", "message":errors["text_wrong"]}; 

var alphabet_digital = [];
for(var i=0; i < alphabet.length; ++i)
{
  alphabet_digital[ alphabet[i] ] = i;
}

var key_size = Math.sqrt(key.length);
var key_digital = new Array();
for(var i = 0; i < key_size; ++i)
{
  var inner = new Array();
  for(var j = 0; j < key_size; ++j)
  {
    inner.push(alphabet_digital[key[i*3 + j]]);
  }
  key_digital.push(inner);
}

var solver = new MatrixSolver();

var detm = solver.calcDeterminantMod(key_digital, alphabet.length);
try
{
  Planetcalc.Calculate3312( {   "a":detm, "m":alphabet.length } );
}
catch (e)
{
  throw { "source":"key", "message":errors["key_bad"]};
}

var transformed_text = "";

//showme(key_digital);
if (method == "d")
  key_digital = solver.calcInverseMod(key_digital, alphabet.length);
//showme(key_digital);
var vector = new Array();
while(vector.length < key_size) vector.push(new Array());

for(var t = 0; t < text.length; ++t)
{
  if (t > 0 && t % key_size == 0)
  {
    transformed_text += transform(vector, key_digital);
    vector = new Array();
    while(vector.length < key_size) vector.push(new Array());
  }
  vector[t % key_size].push(alphabet_digital[text[t]]); 
}

//padding
if (vector[0].length > 0)
{
  for(var i = 0; i < key_size; ++i)
    if(vector[i].length == 0) vector[i].push(alphabet_digital[text[text.length-1]])
  transformed_text += transform(vector, key_digital);
}

transformation.SetValue(transformed_text);

function showme(record)
{
      var property, propCollection = "";

      for(property in record)
      {
          propCollection += (property + ": " + record[property] + "\n");
      }    
      alert(propCollection);
}

function transform(part, key_matrix)
{
  try
  {
    var res = solver.calcMultiplication(key_matrix, part);
    var s = "";
    for(var i = 0; i < res.length; ++i)
      s += alphabet[ res[i]%alphabet.length ];
    return s;
  }
  catch(err)
  {
    if (err == solver.c_nonsquare)
      throw {"source": "matrixA", "message": errors["NonSquare"] };
    else if (err == solver.c_singular)
      throw {"source": "matrixA", "message": errors["Singular"] };  
    else
      alert(err); 
  }
  
} 
};
 __impl__(___inp___); if ( progressControl.completed() ) { progressControl.context = null; } return Calculate3283_result;};inner.main=inner.Calculate3283;inner.progressControl = Calculate3283_cpc; inner.init = function(){inner.progressControl.onDataReady();};};me.adapter = null;function startLoad() {
me.progressControl.addEventListener("ready",handler.onReady);
Planetcalc.init(); }
me.timeout = 1500;
me.auto = 1;
me.init = function ( h, dlg ) { var o; handler=h;dialog =dlg;me.progressControl = Planetcalc.progressControl;var n; var fn;n='alphabet';if ( dlg[n] ) { inputs[n] = dlg[n]; }n='key';if ( dlg[n] ) { inputs[n] = dlg[n]; }n='text';if ( dlg[n] ) { inputs[n] = dlg[n]; }n='method';if ( dlg[n] ) { inputs[n] = dlg[n]; }o = dlg.transformation;outputs[o.id] =o;o.formatter =new FormatterSame( );startLoad();};
me.stop = function() {
  if (worker) worker.postMessage({type:"stop"}); 
  else Planetcalc.progressControl.stop();
};
me.start = function() {
  handler.onStart();
  if (worker) {
    me.changeDisplayOptions();
    worker.postMessage({type:"start",inputs:proxies(dialog.GetValues())});
  } else {
inputValues = {"alphabet":inputs.alphabet.GetValue(), "key":inputs.key.GetValue(), "text":inputs.text.GetValue(), "method":inputs.method.GetValue()}; Planetcalc.progressControl.clear();
    me.result = null;
    me.refresh();
  }
};me.getInputs = function() {
  return inputs;
};
function objectValues( a, o ) {
  for(var n in o) {
    a.push( o[n] );
  }
}
me.getOutputs = function() {
  var ret = [];
  objectValues( ret, outputs );
  objectValues( ret, diagrams );
  objectValues( ret, renderers );
  return ret;
};me.refresh = function ( ) {me.doit();};
me.setResult = function( res, done ) {outputs.transformation.SetValue(res.transformation);if (done) { handler.onStop();if ( PCF.requestFormulaUpdate( false ) ) { var mjx = window.MathJax; mjx.Hub.Queue(["Typeset",mjx.Hub]);};}};
function preprocess( p, cb ) {cb(p,true);}var inputValues = null;me.doit = function ( ) {preprocess(inputValues, function( p, sync, cont ) {if ( cont ) me.progressControl.repeat();try {me.changeDisplayOptions();
var res = Planetcalc.Calculate3283(p);if ( res ) { if ( me.result ) { for( var n in res ) me.result[n] = res[n]; } else me.result = res; }if ( me.result ) me.setResult( me.result, true );} catch( e ) {
  handler.onStop(e);
}});};me.changeDisplayOptions = function () {me.calculateDisplay(new DisplayWrapperInput(inputs.alphabet), new DisplayWrapperInput(inputs.key), new DisplayWrapperInput(inputs.text), { GetValue:function() { return Planetcalc.Resources3283errors;}}, new DisplayWrapperInput(inputs.method), new DisplayWrapper(outputs.transformation));dialog.layout();
}
me.calculateDisplay = function ( alphabet, key, text, errors, method, transformation )
 {
};
},{calculate:"Calculate", stop:"Stop"});;
hd.initdialog(dlg);dlg.addHandler(hd);window.dialoghandlerv616e8dd13e2fa = hd;});</script></div></div>
<script>
    function showAvInitials( i ) {
      i.style.display="none";
      var d = i.parentNode;
      var bg = d.getAttribute("data-bg");
      d.style.backgroundColor = bg;
      var e = d.getElementsByClassName("tb");
      if ( e.length ) {
        e[0].style.display="inline";
      }
    }
    function CommentAvatarFormatter( formatter ) {
      var colors = [ "#D32F2F", "#C2185B", "#7B1FA2", "#512DA8", "#303F9F", "#1976D2", "#0288D1", "#0097A7", "#00796B", "#388E3C", "#689F38", "#AFB42B", "#FBC02D", "#FFA000", "#F57C00", "#E64A19", "#5D4037", "#455A64"];
  this.Format = function ( colname, record ) {
    var ret = '<div class="' + "sb" + '"';
      var name = record.nickname;
      if ( !name ) name = 'Unknown'; else name = name.toString();
      var hash = 0;
      for(var i =0 ;i<name.length;++i) {
        hash+=name.charCodeAt(i);
      }
      var color = colors[ hash%colors.length];
      var namearr = name.split(' ');
      var abbr ='';
      for(var i=0;i<namearr.length && i<2 ;++i) {
        if ( namearr[i].length) {
          abbr+=namearr[i].substr(0,1);
        }
      }
    if ( record.photo ) {
      ret+='data-bg="' + color + '"><img src="' + record.photo + '" alt="' + (record.nickname && record.nickname.replace?record.nickname.replace('"',"'"):'') + '" onerror="showAvInitials(this);">';
    } else {
      ret+=' style="background-color:' + color + '">';
    }
    ret+='<span class="' + "tb" + '"' + (record.photo?' style="display:none;"':'') + '>' + abbr.toUpperCase()  + '</span>';
    ret+='</div>';
    return ret;
  }
}</script>
</div></div></div>
</div>
<script src="https://planetcalc.com/lib/min/4064/pla_m_4064.js"></script>
</body>
</html>
