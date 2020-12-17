


'use strict';
// document.addEventListener('DOMContentLoaded',function(){
//  const g = document.getElementById('hide')
 
//  g.addEventListener('mouseenter',() => {
//   //  g.textContent.toggle = 'aaaaa';
//    g.classList.toggle('jsTest');
//   // // window.alert('ヘイ');
//   });
// });
{


  const formModule =(() => {
    return{
      
      submitForm: () => {
        const forms = document.forms.testForm
        const title = forms.title.value 
        const inputText = forms.voice.value
        const levelCheck = []
        for (const level of forms.levels){
          if(level.checked){
            levelCheck.push(level.value)
            window.alert('送信しました')
          }
        } 
        console.log(
          "題" + title,
          "ご意見:" + inputText,
          "面白いレベル:" + levelCheck
          )
        },
        sumForm:() => {
          const forms = document.forms.testForm
          const title = forms.title.value 
          const inputText = forms.voice.value
          const levelCheck = []
          for (const level of forms.levels){
            if(level.checked){
              levelCheck.push(level.value)
            }
          }
          const formInfo = document.getElementById('testForm')
          formInfo.insertAdjacentHTML('beforeend',
          `<p style="text-align:initial;margin:20px;">
          題名:${title}<br>
          内容:${inputText}<br>
          面白いレベル:${levelCheck}</p>`)
        },
      }
    })();
  }