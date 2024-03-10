import React from 'react'

export default function page() {
    return (
        <div className='py-28 px-20'>

            <div className="text-3xl font-semibold tracking-wider">
                <p>Admin</p>
            </div>

            <div className="mt-10 flex gap-5">
                <a href='/add-cars' className='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Add Cars</a>
                <a href='/add-cars' className='px-6 py-1.5 bg-amber-500 rounded-md text-white font-semibold'>Refresh</a>
            </div>


            <div className="mt-10 flex flex-col gap-6">

                <div className="flex border border-slate-600 gap-5 px-5 rounded-xl h-64">
                    <div className="flex justify-center items-center h-full w-[30rem]">
                        <img src="/car.png" alt="asdasd" className='h-full w-full object-contain' />
                    </div>
                    <div className="py-5">
                        <p className='text-2xl font-semibold '>Car Name</p>
                        <p className='mt-3'>Car info obcaecati exercitationem. Et. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur neque odit vero a. h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60</p>
                        <p className='mt-3 font-semibold'>CAr Rent in inr</p>
                        <div className="mt-8 flex gap-6">
                            <a href="" className='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-sky-500 hover:bg-sky-600'>Edit</a>
                            <a href="" className='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-red-500 hover:bg-red-600'>Delete</a>
                        </div>
                    </div>
                </div>

                <div className="flex border border-slate-600 gap-5 px-5 rounded-xl h-64">
                    <div className="flex justify-center items-center h-full w-[30rem]">
                        <img src="/car.png" alt="asdasd" className='h-full w-full object-contain' />
                    </div>
                    <div className="py-5">
                        <p className='text-2xl font-semibold '>Car Name</p>
                        <p className='mt-3'>Car info obcaecati exercitationem. Et. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur neque odit vero a. h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60</p>
                        <p className='mt-3 font-semibold'>CAr Rent in inr</p>
                        <div className="mt-8 flex gap-6">
                            <a href="" className='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-sky-500 hover:bg-sky-600'>Edit</a>
                            <a href="" className='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-red-500 hover:bg-red-600'>Delete</a>
                        </div>
                    </div>
                </div>

                <div className="flex border border-slate-600 gap-5 px-5 rounded-xl h-64">
                    <div className="flex justify-center items-center h-full w-[30rem]">
                        <img src="/car.png" alt="asdasd" className='h-full w-full object-contain' />
                    </div>
                    <div className="py-5">
                        <p className='text-2xl font-semibold '>Car Name</p>
                        <p className='mt-3'>Car info obcaecati exercitationem. Et. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur neque odit vero a. h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60h-60</p>
                        <p className='mt-3 font-semibold'>CAr Rent in inr</p>
                        <div className="mt-8 flex gap-6">
                            <a href="" className='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-sky-500 hover:bg-sky-600'>Edit</a>
                            <a href="" className='font-semibold px-9 tracking-widest py-1.5 rounded-md text-white bg-red-500 hover:bg-red-600'>Delete</a>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    )
}
