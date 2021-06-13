@extends('layout.master')
@section('title','หน้าแรก')
@section('content')
    <h1>เชื่อต่อฐานข้อมูล กิจกรรม</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>รายการ</th>
                <th>เพิ่มเมื่อ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->created_at}}</td>
                    <td>แก้ไข | <a href="/ลบกิจกรรม/{{$i->id}}">ลบ</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>


@endsection
