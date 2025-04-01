<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <link rel="stylesheet" href="./css/dashboard/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- jQuery 3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Zabuto Calendar 2.1.0 -->
    <link rel="stylesheet" href="./css/zabuto_calendar.min.css">
    <script src="./js/zabuto_calendar.min.js"></script>

    <style>
        table.lightgrey-weekends tbody td:nth-child(n+6) {
            background-color: #f3f3f3;
        }

        .badge {
            background-color: red;
            color: white;
            padding: 2px 5px;
            border-radius: 3px;
        }

        .bg-compromisso-agendado {
            background-color: orange;
        }
    </style>
</head>

<body>
    <div class='header'></div>
    <div class="container">
        <h4>Calendários</h4>
        <div id="demo-calendar-basic"></div>
        <a href="./dashboard.php">Voltar</a>
    </div>
    <div class='footer'></div>
</body>

<script>
    $(document).ready(function() {
        $("#demo-calendar-basic").zabuto_calendar({
            language: "pt",
            events: [{
                    "date": "2025-04-01",
                    "badge": true,
                    "badgeClass": "bg-success",
                    "markup": "<div class='badge rounded-pill bg-success'>[day]</div>"
                },
                {
                    "date": "2025-04-02",
                    "badge": true,
                    "badgeClass": "bg-success",
                    "markup": "<div class='badge rounded-pill bg-success'>[day]</div>"
                },
                {
                    "date": "2025-04-03",
                    "badge": true,
                    "badgeClass": "bg-compromisso-agendado",
                    "markup": "<div class='badge rounded-pill bg-compromisso-agendado'>[day]</div>"
                }
            ],
            action: function(event) {
                var eventData = $("#" + this.id).data("event");
                if (eventData && eventData.url) {
                    window.location.href = eventData.url;
                }
            },
            show_tooltip: true,
            tooltip_markup: function(date, event) {
                return '<div class="tooltip-content">' + event.title + '</div>';
            }
        });
    });
</script>

</html>