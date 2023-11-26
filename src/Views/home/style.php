<style>
    *{
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        padding: 0 50px;
    }

    ul {
        list-style: none;
    }

    .navbar {       
        border: 1px red solid; 
        background-color: gray;  
        display: none;
       
    }

    .navbar-ul{        
        display: flex;        
        flex-direction:row;
        justify-content: space-between;
        color: white;
        margin: 0;
        padding: 0;
        
       
    }

    .navbar-ul-item{
        text-align: center;
        width:100%;
        height: 100%; 
        padding: 14px 20px;
    }
  
    .navbar-ul-item:hover{
        background-color: white;
        color: black;
        cursor: pointer;
    }
    
    .row-content{
        display: flex;
        flex-wrap: wrap;
       
    }

    .aside-container{
        flex: 30%;        
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        border: 1px black solid;
        padding: 10px;
        background-color: #f1f1f1;
       
        
    }
    .aside-about{
        width: 100%;
        box-sizing: border-box;
    }
    .aside-img{
        height: 300px;
        border-bottom: 1px black solid;
        border-right: 1px black solid;
        border-radius: 5px;
    }

    .aside-about-svg{
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: start;
        padding: 20px;
    }

    .main-container{
        flex: 70%;
        border: 1px green solid;
        
        padding: 20px;
    }

    .btn-container{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .btn{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
        width: 100%;
        cursor: pointer;
        border-radius: 5px;
        
    }

    .btn-color-php{
        background-color: #66b3ff;
        border: 1px solid #0080ff;
    }

    .btn-color-js{
        background-color: #ffff99;
        border: 1px solid #ffff33;
    }

    .btn-color-html{
        background-color: #ffa366;
        border: 1px solid #ff751a;
    }

    .btn-color-git{
        background-color: #ff531a;
        border: 1px solid red;
    }

    .btn-color-css{
        background-color: #66c2ff;
        border: 1px solid #1aa3ff;
    }

    .btn-color-bd
    {
        border: 1px solid gray;
    }

    .btn-color-linux{
        background-color: #e6ccff;
        border: 1px solid black;
    }


    .btn-content{
      display: none;
      background-color: white;
      text-align: start;
      padding: 10px;
      width: 80%;
     
    }

    .btn-content p{
        font-size: 15px;
    }

    .btn-content span{
      
        color:  #0080ff;
    }

    .dropdown{
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .dropdown-content{
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        width: 300px ;
        box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;

    }

    .dropdown-content a{
        text-decoration: none;
    }

    .dropdown:hover .dropdown-content{
        display: block;
        
    }

    .doopdown-content-link{
        display: flex;
        flex-direction: column;
        text-align: center;
        font-size: 15px;
        gap:10px;
        
    }


    @media screen and (max-width:600px)
    {
        .row-content, .navbar-ul{
            flex-direction: column;
          
        }
      

        .navbar{
            display: block;
        }
    }
</style>