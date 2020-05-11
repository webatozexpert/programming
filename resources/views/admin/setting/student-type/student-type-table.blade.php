 @if(count($studentTypes)>0)
                            
                        @php($i=1)
                        @foreach($studentTypes as $studentType)
                            <tr>
                                <td>{{ $i++ }}</td>

                                <td>{{ $studentType->class_name }}</td>
                                <td>{{ $studentType->student_type }}</td>
                                <td>{{ $studentType->status==1 ? 'Active' : 'Unactive' }}</td>

                                <td>
                                    @if($studentType->status==1)
                                    <button onclick="studentTypeUnpublished('{{ $studentType->id}}')"  class="btn btn-sm btn-primary" title="unpublished"><span class="fa fa-eye" ></span>View</button>
                                    @else
                                    <button onclick="studentTypepublished('{{ $studentType->id}}')"  class="btn btn-sm btn-warning" title="published"><span class="fa fa-eye"></span>View</button>
                                    @endif
                                    <button onclick="studentTypeEdit('{{ $studentType->id}}','{{ $studentType->student_type }}')" class="btn btn-sm btn-info" title="edit"><span class="fa fa-edit" ></span>Edit</button>
                                    <button onclick="studentTypeDelete('{{ $studentType->id}}')" class="btn btn-sm btn-danger"  title="delete"><span class="fa fa-trash"></span>Delete</button>
                                </td>
                            </tr>
                        @endforeach
                            @else
                            
                            <tr class="text-danger">
                                <td colspan="5">Student Type Not Found !!!</td>
                            </tr>
                            
                            @endif

