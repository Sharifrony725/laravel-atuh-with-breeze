@foreach ($teachers as $item)
   Name: {{ $item->name }} <br>
   Email: {{ $item->email }} <br>
   Phone: {{ $item->phone }} <br>
   Salary: {{ $item->rSalary->salary }} <hr>
@endforeach
