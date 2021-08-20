namespace App\Http\Requests\Task;

class StoreRequest extends Request
{
    public function rules()
    {
        return [
            'status' => 'required|max:10',
            'content' => 'required|max:255',
        ];
    }
}
