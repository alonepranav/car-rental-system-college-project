
export default function Contact() {

  return (
    <>
      <div className="min-h-screen w-screen px-2 pb-20">
        <div className="mb-7 pt-28 md:pt-28">
          <h2 className="font-mono text-center text-4xl md:text-5xl font-bold">
            Contact Here
          </h2>
          <p className="text-center my-3 text-sm md:text-lg text-stone-500 w-full md:w-[70%] mx-auto">
            Report an issue in website, want to give any suggestion or just want
            to reach me ?
            <br />
            Catch me here 📩
          </p>
        </div>

        <form
          className="w-full md:w-6/12 p-[3px] rounded-xl mx-auto my-gradient"
        >
          <div className="bg-white rounded-lg overflow-hidden p-5 md:px-10 md:py-7">

            <div className="w-full mb-6">
              <label for="name" className="block text-sm my-1">
                Name
              </label>
              <input
                type="text"
                id="name"
                className="focus:ring-2 focus:ring-blue-400 outline-none border-2 border-slate-300 py-1.5 px-2 w-full rounded"
                required
              />
            </div>

            <div className="w-full mb-6">
              <label for="email" className="block text-sm my-1">
                Email
              </label>
              <input
                type="eamil"
                id="email"
                className="focus:ring-2 focus:ring-blue-400 outline-none border-2 border-slate-300 py-1.5 px-2 w-full rounded"
              />
            </div>

            <div className="w-full mb-6">
              <label for="message" className="block text-sm my-1">
                Message
              </label>

              <textarea
                id="message"
                rows="3"
                required
                className="focus:ring-2 focus:ring-blue-400 outline-none border-2 border-slate-300 py-1.5 px-2 w-full rounded"
              ></textarea>
            </div>
            <div className="flex justify-center">
              <button
                type="submit"
                className="py-[0.5rem] px-5 text-sm tracking-widest bg-black rounded text-white"
              >
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </>
  );
}