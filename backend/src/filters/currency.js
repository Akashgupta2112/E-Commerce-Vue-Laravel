export default function currencyINR(value) {
  return new Intl.NumberFormat('en-In', {style: 'currency', currency: 'INR'})
    .format(value);
}
