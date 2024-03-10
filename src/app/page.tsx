import React from 'react'

export default function page() {
  return (
    <div>

      <br />
      <br />
      <br />
      <br />
      <br />
      <br />

      <div className="flex justify-center gap-60 flex-wrap items-center">
        <div className="">
          <p className='mb-2'>The most convenient site</p>
          <p className='text-4xl font-semibold mb-2'>Search, Find, Rent</p>
          <p className=''>Rent your favourite car in easy steps</p>
          <p className='my-2 bg-blue-500 px-5 mt-4 py-1.5 rounded-full w-fit text-white font-semibold'>Rent Now</p>
        </div>
        <div className="bg-sky-200 rounded-3xl">
          <img src="/car.png" alt="" className='h-80 w-[33rem]' />
        </div>
      </div>


      <br />
      <br />
      <br />
      <br />


      <div className="flex justify-center gap-20 flex-wrap items-center">
        <div className="bg-sky-200 rounded-3xl">
          <img src="/car.png" alt="" className='h-80 w-[33rem]' />
        </div>
        <div className="">
          <p className='mb-2'>Best Services</p>
          <p className='text-2xl font-semibold'>Feel the best experience
            with our
             rental deals</p>
            <br />
          <p className=''>Rent your favourite car in easy steps</p>
          <p className='my-2 bg-blue-500 px-5 py-1.5 rounded-full w-fit text-white font-semibold mt-4'>Explore our cars</p>
        </div>
      </div>

      <br />
      <br />
      <br />

      <div className=" bg-slate-100 py-14 pb-20">
        <div className="text-center text-4xl font-semibold tracking-wide">
          <p>Our <span className='text-blue-500'>Services</span></p>
        </div>

        <div className="flex justify-center items-center gap-16 pt-20">
          <div className="h-52 border border-slate-500 shadow-md shadow-slate-300 rounded-3xl w-80 flex justify-between flex-col p-5 bg-white">
            <p className='text-2xl font-semibold'>Sports Car on Rent</p>
            <p className='py-4'>Rent a best sports car for us</p>
            <a href="" className='px-6 py-2 rounded-full bg-amber-400 w-fit tracking-wide font-semibold'>Explore Cars</a>
          </div>

          <div className="h-52 border border-slate-500 shadow-md shadow-slate-300 rounded-3xl w-80 flex justify-between flex-col p-5 bg-white">
            <p className='text-2xl font-semibold'>Sports Car on Rent</p>
            <p className='py-4'>Rent a best sports car for us</p>
            <a href="" className='px-6 py-2 rounded-full bg-amber-400 w-fit tracking-wide font-semibold'>Explore Cars</a>
          </div>

          <div className="h-52 border border-slate-500 shadow-md shadow-slate-300 rounded-3xl w-80 flex justify-between flex-col p-5 bg-white">
            <p className='text-2xl font-semibold'>Sports Car on Rent</p>
            <p className='py-4'>Rent a best sports car for us</p>
            <a href="" className='px-6 py-2 rounded-full bg-amber-400 w-fit tracking-wide font-semibold'>Explore Cars</a>
          </div>

        </div>
      </div>


      <div className="pt-14 pb-7">
        <div className="text-center text-4xl font-semibold tracking-wide">
          <p>Our <span className='text-blue-500'>Cars</span></p>
        </div>

        <div className="flex gap-6 mt-20 items-center justify-center flex-wrap">

          {/* -------------------------------------------------------------------------------------------------------------------------------------- */}

          <div className='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
            <div className="p-3">
              <img src="/car.png" alt="" />
            </div>
            <div className="p-4 bg-stone-100">
              <p className='text-2xl font-semibold pb-3'>Scorpio</p>
              <p>This is a 6 sitter sports car</p>
              <p className='flex gap-3 items-center mt-3'>
                <span>20000</span>
                <i className="bi bi-currency-rupee"></i></p>

              <button className='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 rounded-md'>See Details</button>

            </div>
          </div>


          <div className='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
            <div className="p-3">
              <img src="/car.png" alt="" />
            </div>
            <div className="p-4 bg-stone-100">
              <p className='text-2xl font-semibold pb-3'>Scorpio</p>
              <p>This is a 6 sitter sports car</p>
              <p className='flex gap-3 items-center mt-3'>
                <span>20000</span>
                <i className="bi bi-currency-rupee"></i></p>

              <button className='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 rounded-md'>See Details</button>

            </div>
          </div>


          <div className='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
            <div className="p-3">
              <img src="/car.png" alt="" />
            </div>
            <div className="p-4 bg-stone-100">
              <p className='text-2xl font-semibold pb-3'>Scorpio</p>
              <p>This is a 6 sitter sports car</p>
              <p className='flex gap-3 items-center mt-3'>
                <span>20000</span>
                <i className="bi bi-currency-rupee"></i></p>

              <button className='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 rounded-md'>See Details</button>

            </div>
          </div>

          {/* -------------------------------------------------------------------------------------------------------------------------------------- */}


        </div>

      </div>

    </div>
  )
}
