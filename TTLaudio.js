let speech = new SpeechSynthesisUtterance();
speech.lang = "fr";

//speech.text = "hello! welcome"



//const startButton = document.getElementById("speakButton");

//startButton.addEventListener("click", speakText);

function speakText() {
  speech.text = speachText;
  window.speechSynthesis.speak(speech);
  console.log(speachText)
}