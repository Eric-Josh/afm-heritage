<?php 
use App\Bstudies;
use App\Tracts;
use App\Sunsch;
use App\Std;
use App\Cgs;


Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// home > tracts
Breadcrumbs::for('tracts.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Tracts', route('tracts.index'));
});

// home > tracts > New tracts
Breadcrumbs::for('tracts.create', function ($trail) {
    $trail->parent('tracts.index');
    $trail->push('New Tract', route('tracts.create'));
});

// home > tracts > Update tracts
Breadcrumbs::for('tracts.edit', function ($trail, $id) {
    $tracts = Tracts::find($id);
    $trail->parent('tracts.index');
    $trail->push($tracts->title, route('tracts.edit', $id));
});

// home > tracts > view tracts
Breadcrumbs::for('tracts.show', function ($trail, $id) {
    $tracts = Tracts::find($id);
    $trail->parent('tracts.index');
    $trail->push($tracts->title, route('tracts.show', $id));
});

// bible study
Breadcrumbs::for('bstudies.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Bible Study Outlines', route('bstudies.index'));
});
Breadcrumbs::for('bstudies.create', function ($trail) {
    $trail->parent('bstudies.index');
    $trail->push('New Bible Study Outline', route('bstudies.create'));
});
Breadcrumbs::for('bstudies.edit', function ($trail, $id) {
    $bstudies = Bstudies::find($id);
    $trail->parent('bstudies.index');
    $trail->push($bstudies->title, route('bstudies.edit', $id));
});
Breadcrumbs::for('bstudies.show', function ($trail, $id) {
    $bstudies = Bstudies::find($id);
    $trail->parent('bstudies.index');
    $trail->push($bstudies->title, route('bstudies.show', $id));
});

// CGS
Breadcrumbs::for('cgs.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Collected Gospel Songs', route('cgs.index'));
});
Breadcrumbs::for('cgs.create', function ($trail) {
    $trail->parent('cgs.index');
    $trail->push('New Collected Gospel Songs', route('cgs.create'));
});
Breadcrumbs::for('cgs.edit', function ($trail, $id) {
    $cgs = Cgs::find($id);
    $trail->parent('cgs.index');
    $trail->push($cgs->title, route('cgs.edit', $id));
});
Breadcrumbs::for('cgs.show', function ($trail, $id) {
    $cgs = Cgs::find($id);
    $trail->parent('cgs.index');
    $trail->push($cgs->title, route('cgs.show', $id));
});

// SSL
Breadcrumbs::for('sunsch.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Sunday School Lessons', route('sunsch.index'));
});
Breadcrumbs::for('sunsch.create', function ($trail) {
    $trail->parent('sunsch.index');
    $trail->push('New Sunday School Lesson', route('sunsch.create'));
});
Breadcrumbs::for('sunsch.edit', function ($trail, $id) {
    $sunsch = Sunsch::find($id);
    $trail->parent('sunsch.index');
    $trail->push($sunsch->title, route('sunsch.edit', $id));
});
Breadcrumbs::for('sunsch.show', function ($trail, $id) {
    $sunsch = Sunsch::find($id);
    $trail->parent('sunsch.index');
    $trail->push($sunsch->title, route('sunsch.show', $id));
});

// Marriage seminar

// STD
Breadcrumbs::for('std.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Steps to Deliverance', route('std.index'));
});
Breadcrumbs::for('std.create', function ($trail) {
    $trail->parent('std.index');
    $trail->push('New Step to Deliverance', route('std.create'));
});
Breadcrumbs::for('std.edit', function ($trail, $id) {
    $std = Std::find($id);
    $trail->parent('sunsch.index');
    $trail->push($std->title, route('std.edit', $id));
});
Breadcrumbs::for('std.show', function ($trail, $id) {
    $std = Std::find($id);
    $trail->parent('std.index');
    $trail->push($std->title, route('std.show', $id));
});
