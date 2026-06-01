<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #111827;
        }

        .container {
            max-width: 950px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            margin-top: 8px;
            color: #6b7280;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .count {
            margin-bottom: 18px;
            color: #6b7280;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #f9fafb;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            color: #6b7280;
            font-size: 14px;
        }

        .student-no {
            font-weight: bold;
            color: #1d4ed8;
        }

        .empty {
            text-align: center;
            color: #6b7280;
            padding: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Student List</h1>
            <p>Activity 5: Students Module Structure</p>
        </div>

        <div class="card">
            <div class="count">
                Total Students: {{ $students->count() }}
            </div>

            <table>
                <thead>
                    <tr>
                        <th>STUDENT NO.</th>
                        <th>NAME</th>
                        <th>COURSE</th>
                        <th>YEAR LEVEL</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td class="student-no">{{ $student->student_no }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->year_level }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="empty">
                                No students found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>