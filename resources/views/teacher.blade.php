@foreach ($teachers as $item)
   Name: {{ $item->name }} <br>
   Email: {{ $item->email }} <br>
   Phone: {{ $item->phone }} <br>

   @foreach ($item->rSalary as $salary)
         Salary: {{ $salary->salary }} <br>
   @endforeach
   <hr>
@endforeach
