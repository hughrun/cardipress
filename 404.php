<style>
body {
  font-family: 'Dosis', sans-serif;
  padding: 1em 2em;
  color: #3a3a3a;
  font-size: 1.25em;
}

a {
	color: #ff748c;
	text-decoration: none;
}

.four-zero-four {
  font-size: 16em;
  margin: 0;
}

.not-found {
  font-size: 2.5em;
}

.go-home {
  margin-top: 2em;
}

</style>
<div>
  <p class="four-zero-four">404</p>
</div>
<div class="not-found" id="error-msg">
404 - sorry, I can't find that.
</div>
<div class="go-home">
<a href="/">Go to Home Page</a>
</div>

<script type="application/javascript">

var count = Math.random();
var msg = "";
var eMsg = document.getElementById("error-msg");
console.log(eMsg)

function getMessage(count){

  if (count < 0.25) {
    msg = "an Archival Silence ...or possibly a typo."
  }
  else if (count >= 0.25 && count < 0.5) {
    msg = "incorrect assumptions about user behaviour."
  }
  else if (count >= 0.5 && count < 0.75) {
    msg = "a finding-aid error."
  } else {
    msg = "a mislabelled catalogue record."
  }
  console.log(count);
  console.log(msg);
  return msg;
}

eMsg.textContent = 'This page is missing due to ' + getMessage(count);

</script>
