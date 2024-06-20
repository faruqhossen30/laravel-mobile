@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Brand" />
        <x-button.button-plus route="{{ route('brand.create') }}" title="Create brand" />
    </div>
@endsection
@section('content')
    <div class="flex flex-row-reverse py-2">

    </div>
    <div class="bg-white dark:bg-transparent ">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Photo</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($brands as $brand)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $brands->firstItem() + $loop->index }}
                                        </td>

                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            <img src="{{ asset('storage/' . $brand->thumbnail) }}" class="h-6 w-auto"
                                                alt="{{ $brand->name }}">
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $brand->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium delete ">

                                            <x-table.crudactionbutton route="brand" :id="$brand->id  " />

                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="3"
                                        class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-800 dark:text-gray-200">
                                        Brand is empty.
                                    </td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#deleteButton').on('click', function(e) {
            e.preventDefault();
            var self = $(this);
            console.log(self.data('title'));

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(


                        {
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        }

                        location.href = self.attr('href');
                        );
                    }
                });
        })
    </script>
@endpush
