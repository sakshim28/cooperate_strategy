<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Advantage Design</title>
    <style>
        body {
            font-family:AvenirNextPForBBG, Helvetica, Arial, sans-serif;;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 20px;
            gap: 20px;
        }

        .section-row h1 {
            flex: 1;
            font-size: 2.5em;
            margin: 0;
        }

        .section-row p {
            flex: 2;
            font-size: 1.1em;
            color: #555;
            margin: 0;
            text-align: justify;
        }

        /* For the three-column section */
        .three-columns {
            display: flex;
            justify-content: space-between;
            margin: 50px 0;
            flex-wrap: wrap;
        }

        .column {
            width: 30%;
            min-width: 280px;
            padding: 10px;
        }

        .column p {
            font-size: 1.1em;
        }

        /* Gray section */
        .gray-section {
            background-color: #f3f3f3;
            padding: 60px 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-row {
                flex-direction: column;
                text-align: center;
            }

            .section-row h1 {
                font-size: 2em;
            }

            .three-columns {
                flex-direction: column;
                align-items: center;
            }

            .column {
                width: 90%;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .section-row h1 {
                font-size: 1.8em;
            }

            .section-row p, .column p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- First Section -->
    <div class="section-row">
        <h1>Gain a strategic advantage</h1>
        <p>In a rapidly-evolving business landscape, deep understanding and timely information are key to building successful corporate strategies. Bloomberg provides you with news, data and intelligence on the state of your industry today, along with long-range forecasts on the energy transition from BloombergNEF (BNEF) that enable you to grasp the disruptive trends that will shape profitability for decades to come.</p>
    </div>

    <!-- Three columns section -->
    <div class="three-columns">
        <div class="column">
            <h2>Competitive intelligence</h2>
            <p>Track and gain insight on your competitors' actions – and results – and see how you compare on key metrics.</p>
        </div>
        <div class="column">
            <h2>Industry research</h2>
            <p>Turn intelligence into action with expert analysis from across industries, law and government.</p>
        </div>
        <div class="column">
            <h2>Sustainability insights</h2>
            <p>Use proprietary research and data to stay on top of energy transition, climate targets, regulations, technology and investment.</p>
        </div>
    </div>
</div>

<!-- Gray section -->
<div class="gray-section">
    <div class="container">
        <div class="section-row">
            <h1>Future-proof your decision making</h1>
            <p>The transition toward a lower-carbon economy is impacting industries across the globe. BNEF combines insights from commodities, industry, finance and policy to create data-driven forecasts for up to 50 years into the future – and help business professionals make decisions that will stand the test of time.</p>
        </div>
    </div>
</div>

</body>
</html>
