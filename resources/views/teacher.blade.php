@foreach ($teachers as $item)
   Name: {{ $item->rTeacher->name }} <br>
   Email: {{ $item->rTeacher->email }} <br>
   Phone: {{ $item->rTeacher->phone }} <br>
   Salary: {{ $item->salary }} <hr>
@endforeach
