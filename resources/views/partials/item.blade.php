<li>
<<<<<<< HEAD
    <div class="list-timeline-time">{{ $t->created_at->diffForHumans() }}</div>
=======
    <div class="list-timeline-time">{{ date('D M jS, Y g:ia', strtotime($t->created_at))  }}</div>
>>>>>>> 3437561e08c1bf919a29226aa24cf6ead4655f09
    <i class="fa {{$t->type == 'purchase' ? 'fa-cart-plus' : 'fa-shopping-cart'}} list-timeline-icon bg-flat"></i>
    <div class="list-timeline-content">
        <p class="font-w600"> {{ $t->type =='purchase' ? $t->market->abbr_name . ' Purchased' : $t->market->abbr_name . ' Sold' }} <a href="{{ route('transaction.single', $t->id) }}" class="btn btn-primary btn-xs"> View </a></p>
        <p class="font-s13">Package:  <b>{{ $t->package->name }}</b></p>
        <p class="font-s13">Status:  <b class="text-capitalize">{{ $t->status }}</b></p>
    </div>
</li>