
<br>
<br>
<br>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
<style>
    .orixal {
        display: flex;
        flex-wrap: wrap;
        width: 80%;
        justify-content: center;
        align-items: stretch; /* Ensure all boxes stretch to the same height */
    }
    .box {
        flex: 1 1 33%; /* Each box takes up one-third of the width */
        padding: 30px;
        color: #fff;
        text-align: center;
        box-sizing: border-box;
        height: 250px; /* Fixed height to ensure uniform box size */
        display: flex;
        flex-direction: column;
        justify-content: center; /* Center content vertically */
    }
    .box:nth-child(1) {
        background-color: #333; /* Dark gray */
    }
    .box:nth-child(2) {
        background-color: #636363; /* Brown-orange */
    }
    .box:nth-child(3) {
        background-color: #b2b2b2; /* Blue */
    }
    .box:nth-child(4) {
        background-color: #34a853; /* Green */
    }
    .box:nth-child(5) {
        background-color: #fbbc05; /* Yellow */
    }
    .box:nth-child(6) {
        background-color: #ea4335; /* Red */
    }

    .box h1 {
        color: #b96125;
        font-family: "Lato", sans-serif;
        font-size: 35px; /* Adjusted font size */
        font-weight: bold;
        line-height: 1.5;
        letter-spacing: 2px;
        margin: 0;
    }
    .box p {
        font-family: "Lato", sans-serif;
        font-size: 15px;
        font-weight: bold;
        line-height: 1.6;
        margin: 0;
        line-height: 1.2;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .box {
            flex: 1 1 100%; /* Full width on mobile */
            height: 200px; /* Adjust height for smaller screens */
        }
        .box h1 {
            font-size: 24px;
        }
        .box p {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .box {
            padding: 10px;
            height: 180px;
        }
        .box h1 {
            font-size: 20px;
        }
        .box p {
            font-size: 12px;
        }
    }
</style>



<center>
    <div class="orixal">
        <div class="box">
            <h1><b>LISTEN</b></h1>
            <p>We listen, understand, and craft strategies that elevate your brand to new heights</p>
        </div>
        <div class="box">
            <h1 style="pading: top 10px;"><b>PLAN </b></h1>
        
            <p>We craft a tailored strategy that fuses creativity with purpose, setting the stage for exceptional results</p>
        </div>
        <div class="box">
            <h1><b>TAKE ACTION </b></h1>
            <p>We don't just deliver <br>
            We create unforgettable experiences that resonate</p>
        </div>
    </div>
</center>
