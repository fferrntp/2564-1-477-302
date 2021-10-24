let round = prompt("คุณทายอะไรจ้ะ")
for(var i = 0; i<round; i++)
{
    var answer = prompt("หัว หรือ ก้อย ทายจ้า !")
    var random_answer = ""
    if(Math.random() *10){
        //หัว
        random_answer = "หัว"
    }
    else{
        //ก้อย
        random_answer = "ก้อย"
    }
    if(answer == random_answer){
        alert("ตอบถูก! ยินดีด้วย")
    }
    else{
        alert("ตอบผิด! เสียใจด้วย")
    }
    console.log(random_answer+ ":" +answer)
}