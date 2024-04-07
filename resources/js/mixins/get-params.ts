import { Param } from "../types/param";

export const getParams = (params:Param[]) => {
   const result:any = {};
   for(let i = 0; i < params.length; i++) {
      const param = params[i];
      result[param.key] = param.value;
   }
   return result;
};
