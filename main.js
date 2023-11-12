const btnAsk = document.querySelector('.btn-ask');
const btnOk = document.querySelector('.btn-ok');
const btnFormaty = document.querySelector('.btn-formaty');
const btnStop = document.querySelector('.btn-stop');
let wrapperVideo = document.getElementById('fon');
const videoSpace = document.getElementById('video-space');

const textArea = document.getElementById('textAreaExample6');


btnFormaty.addEventListener('click',function(){
  wrapperVideo.remove();
  videoSpace.insertAdjacentHTML('beforeend', `<video id="fon" autoplay="" controls="" src="videos/formaty.webm"></video>`); // И создаём видео внутри блока для видео
  wrapperVideo = document.getElementById('fon');
  wrapperVideo.play();
});

btnAsk.addEventListener('click',function(){
      
        var form = $('form')[1]; // You need to use standard javascript object here
        var formData = new FormData(form);
        var area = formData.get('userQuestion');
        console.log(form);
        console.log(area);

    var formdata = new FormData();
    formdata.append("userText", formData.get('userQuestion'));
    
    var requestOptions = {
      method: 'POST',
      body: formdata,
      redirect: 'follow'
    };
    
    fetch("http://141.8.198.155:56733/getanswer?userText=sdfjhjh", requestOptions)
      .then(response => response.text())
      .then(result => {
          const obj = JSON.parse(result);
          console.log(obj.answer);
          console.log(obj);
          document.querySelector('#pageText').innerHTML = obj.answer;
          //show_text();

          wrapperVideo.remove();
  
          if (textArea.value == 'привет'){
            videoSpace.insertAdjacentHTML('beforeend', `<video id="fon" autoplay="" controls="" src="videos/Untitled video.mp4"></video>`); // И создаём видео внутри блока для видео
          } else if ( document.querySelector('#pageText').innerHTML == 'Вопрос, конечно, интересный, но переформулируйте его понятнее') {
            videoSpace.insertAdjacentHTML('beforeend', `<video id="fon" autoplay="" controls="" src="videos/question_is_not_correct.webm"></video>`); // И создаём видео внутри блока для видео
            console.log('кейс2');
          } else{
            videoSpace.insertAdjacentHTML('beforeend', `<video id="fon" autoplay="" controls="" src="videos/question_is_not_correct.webm" muted></video>`); // И создаём видео внутри блока для видео  
            console.log('кейс3');
          }
          
          wrapperVideo = document.getElementById('fon');
          wrapperVideo.play();
          
          
          
      })
      .catch(error => console.log('error', error));
          

});

btnOk.addEventListener('click',function(){
  wrapperVideo.remove();
  videoSpace.insertAdjacentHTML('beforeend', `<video id="fon" autoplay="" controls="" src="videos/bd530bac056d41c9adc07cd5bc9e5e34.webm"></video>`); // И создаём видео внутри блока для видео
  wrapperVideo = document.getElementById('fon');
  wrapperVideo.play();
});

btnStop.addEventListener('click',function(){
  wrapperVideo.pause();
});


//Плавный вывод текста
var source,dest,len,now=0,delay=30,letters=1;
function show_text()
{
    source = document.getElementById("response");
    dest = document.getElementById("pageText");
    dest.innerHTML="";
    len = source.innerHTML.length;
    show();
}

function show()
{
    dest.innerHTML += source.innerHTML.substr(now,letters);
    now+=letters;

    if(now<len)
    	setTimeout("show()",delay);
}
//Плавный вывод текста



