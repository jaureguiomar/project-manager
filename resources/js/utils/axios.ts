import axios from "axios";

export default axios.create({
   baseURL: "http://127.0.0.1:8001/api",
   responseType: "json",
   headers: {
      "Accept": "application/json",
      "Content-Type": "application/json"
   },
   timeout: 9999
});
