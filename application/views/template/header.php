<style>
    /* Global Styles */
    body {
        font-family: 'Times New Roman', Times, serif;
        /* Use Roboto font */
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    /* Header Styles */
    #header {
        background-color: #333;
        /* Dark background color */
        color: #fff;
        /* Light text color */
        padding: 20px;
        /* Padding around content */
    }

    #header .row {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #ICP h1 {
        margin: 0;
        /* Remove default margin */
        font-size: 32px;
        /* Adjust font size */
        font-weight: 700;
        /* Bold font weight */
        color: #016d9c;
        /* Yellow color for text */
        text-transform: uppercase;
        /* Uppercase text */
    }

    .welcome-user {
        font-size: 18px;
        /* Adjust font size */
        font-weight: bold;
        /* Bold font weight */
        text-transform: uppercase;
        /* Uppercase text */
        letter-spacing: 1px;
        /* Spacing between letters */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        /* Text shadow */
    }

    /* Responsive Styles */
    @media (max-width: 768px) {

        /* Adjust styles for smaller screens */
        #header .col-lg-4 {
            flex: 1;
            /* Each column takes equal space */
            text-align: center;
            /* Center align text */
        }
    }
</style>
</head>

<body>
    <section id='header'>
        <div class="container">
        <div class="row p-3">
                <div class="col-lg-12 text-center">
                    <div id="ICP">
                        <h1>Immaculate Conception Polytechnic</h1>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
</body>

</html>