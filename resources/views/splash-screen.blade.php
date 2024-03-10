<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>

    <script src="./js/animation.js"></script>

    <title>Text Reveal</title>
</head>

<body>
    <section>
        <div class="cover"></div>
        <div class="content">
            <div class="text">
                <h2>Hi !</h2>
            </div>
            <div class="main_content">
                <h1>Title text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>
            </div>
        </div>
    </section>
</body>

</html>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Montserrat;
}
.content{
    background-color: #161516;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.text{
    width: 150px;
    height: 80px;
    overflow: hidden;
    text-align: center;
    position: relative;
    
}
.text h2{
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    top: -100%;
    color: white;
    font-size: 2.5em;
}
section{
    overflow: hidden;
    position: relative;
    height: 100vh;
    width: 100vw;
}
.cover{
    position: absolute;
    background-color: white;
    height: 60%;
    width: 100%;
    top: -60%;
    z-index: 2;
}
.main_content{
    width: 60%;
    color: white;
    display: none;
}
.main_content h1,p{
    padding: 10px;
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    anime.timeline({

        })
        .add({
            targets: '.cover',
            height: ['60%', '200%'],
            top: ['-90%', '100%'],
            easing: 'easeInOutCubic',
            duration: '1600'
        })
        .add({
            targets: '.text h2',
            top: ['-150%', '50%'],
            easing: 'easeOutQuad',
            offset: '-=600',
            duration: '700'
        })
        .add({
            targets: '.text h2',
            top: ['50%', '150%'],
            easing: 'easeOutQuad',
            offset: '+=1000',
            duration: '700'
        })
        .add({
            targets: '.cover',
            height: ['60%', '200%'],
            top: ['-90%', '100%'],
            easing: 'easeInOutCubic',
            duration: '1600',
            offset: '-=400',
            complete: (anim) => {
                document.querySelector('.text').style.display = 'none';
                document.querySelector('.main_content').style.display = 'block';
            }
        })
        .add({
            targets: '.main_content h1,p',
            translateY: [50, 0],
            opacity: [0,1],
            easing: 'easeOutExpo',
            delay: (el,i)=>i*150
        })

})

</script>