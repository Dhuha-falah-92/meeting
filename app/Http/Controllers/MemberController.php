<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Member;
class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->paginate(10);
        return view('members.index',compact('members'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'string',
            'date' => 'string',
            'from' => 'string',
            'too' => 'string',
            'email' => 'string',
        ]);
        $mod=new Member;
        $mod->name=$request->input('name');
        $mod->date=$request->input('date');
        $mod->from=$request->input('from');
        $mod->too=$request->input('too');
        $mod->email=$request->input('email');
        $mod->save();

        // Member::create($request->all());
        return redirect()->route('members.index')
                        ->with('success','Member created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show',compact('member'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit',compact('member'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Member $member)
    {
        request()->validate([
            'name' => 'required',
            'date' => 'required',
            'from' => 'required',
            'too' => 'required',
            'email' => 'required',
        ]);
        // $mod=new Member;
        // $mod->name=$request->input('name');
        // $mod->date=$request->input('date');
        // $mod->from=$request->input('from');
        // $mod->too=$request->input('too');
        // $mod->email=$request->input('email');
        // $mod->update();
        $member->update($request->all());
        return redirect()->route('members.index')
                        ->with('success','Member updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::destroy($id);
        return redirect()->route('members.index')
                        ->with('success','Member deleted successfully');
    }
}