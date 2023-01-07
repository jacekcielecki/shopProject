<h1>{{$heading}}</h1>
@if(count($listings) == 0)
    <p>No listings</p>
@endif
@foreach($listings as $listing)
<a href="/listings/{{$listing['id']}}">
    <h2>{{$listing['title']}};</h2> 
</a>
    <p>{{$listing['tags']}}</p>
    <p>{{$listing['company']}}</p>
    <p>{{$listing['location']}}</p>
    <p>{{$listing['email']}}</p>
    <p>{{$listing['website']}}</p>
    <p>{{$listing['description']}}</p>

@endforeach