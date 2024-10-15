<!DOCTYPE html>
<html>
<head>
    <title>Equation Solver Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        h1, h2 {
            color: #444;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .attempts {
            font-weight: bold;
            color: #555;
        }
        .no-solutions {
            background: #ffdddd;
            color: #a00;
            padding: 10px;
            border-radius: 5px;
        }
        .result-letters {
            font-family: monospace;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Equation Solver Results</h1>
    <p class="attempts">Total Attempts: {{ $attempts }}</p>
    <h2>Solutions:</h2>
    <ul>
        @forelse ($solutions as $solution)
            <li>
                <div class="result-letters">
                    {{ implode(', ', array_map(fn($letter, $digit) => "$letter=$digit", array_keys($solution['resultLetters']), $solution['resultLetters'])) }}
                </div>
                <div>
                    {{ $solution['HIER'] }} + {{ $solution['GIBT'] }} + {{ $solution['ES'] }} = {{ $solution['NEUES'] }}
                </div>
            </li>
        @empty
            <p class="no-solutions">No solutions found.</p>
        @endforelse
    </ul>
</body>
</html>
